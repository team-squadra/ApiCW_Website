<?php
session_start();

include '../../Connecter/connecterlink.php';
$clinklocal = $clink;

registration($clinklocal);

function registration($clinklocal){

    if (isset($_GET['registration_user']) && $_GET['registration_user'] == 'true'){

        $uname = $_POST['u_reg_uname'];
        $phone_number = $_POST['u_reg_phone'];
        $email = $_POST['u_reg_email'];
        $password = $_POST['u_reg_pass'];

        
        // The data to send to the API
        $postData = array(
            'name' => $uname,
            'password' => $password,
            'email' => $email,
            'phone_number' => $phone_number,
            'status' => "user"
        );

        // Setup cURL
        $ch = curl_init(''.$clinklocal.'api/user/register');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === FALSE) {
            die(curl_error($ch));
            echo 'Dead';
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        //error
        $error = $responseData['error'];
        
        //result finalizing
        if ($error == "success"){
            echo json_encode(['error' => 'success', 'msg' => 'login.php']);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$error.'']);
        }

    }


    if (isset($_GET['registration_hotel']) && $_GET['registration_hotel'] == 'true'){

        $uname = $_POST['h_reg_uname'];
        $email = $_POST['h_reg_email'];
        $password = $_POST['h_reg_pass'];

        
        // The data to send to the API
        $postData = array(
            'name' => $uname,
            'password' => $password,
            'email' => $email,
            'status' => "hotel"
        );

        // Setup cURL
        $ch = curl_init(''.$clinklocal.'api/user/register');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === FALSE) {
            die(curl_error($ch));
            echo 'Dead';
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        //error
        $error = $responseData['error'];
        
        //result finalizing
        if ($error == "success"){
            registration_setp2($email , $uname ,$clinklocal);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$error.'']);
        }

    }
}


function registration_setp2($remail , $runame , $clinklocal){

        //The data to send to the API
        $postData = array(
            'email' => $remail,
            'name' => $runame
        );
    
        // Setup cURL
        $ch = curl_init(''.$clinklocal.'api/hotels/reghotel');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));
    
        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === FALSE) {
            die(curl_error($ch));
            echo 'Connection error';
        }
    
        // Decode the response
        $responseData = json_decode($response, TRUE);
    
        // Print the date from the response
        $error = $responseData['error'];

        //result finalizing
        if ($error == "success"){
            echo json_encode(['error' => 'success', 'msg' => 'login.php']);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$error.'']);
        }

}
