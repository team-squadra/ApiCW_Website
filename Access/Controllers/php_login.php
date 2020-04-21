<?php
session_start();

include '../../Connecter/connecterlink.php';
$clinklocal = $clink;


    if (isset($_GET['login']) && $_GET['login'] == 'true'){

        $email = $_POST['lg_email'];
        $password = $_POST['lg_password'];

        // The data to send to the API
        $postData = array(
            'password' => $password,
            'email' => $email);

        // Setup cURL
        $ch = curl_init( ''.$clinklocal.'api/user/login');
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
        if($response === FALSE){
            die(curl_error($ch));
            echo 'Dead';
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        // Print the date from the response
        $error = $responseData['error'];

        if ($error == "success") {
            
            $status = $responseData['status'];
            $token = $responseData['token'];
            $email = $responseData['email'];
            $name = $responseData['name'];
            
            if ($status == "admin") {
                $_SESSION["status"] = $status;
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["token"] = $token;

                echo json_encode(['error' => 'success', 'msg' => '../Admin/index.php']);

            } else if($status == "user") {
                $_SESSION["status"] = $status;
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["token"] = $token;

                echo json_encode(['error' => 'success', 'msg' => '../User/Home.php']);
            }
            else if($status == "hotel"){
                $_SESSION["status"] = $status;
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["token"] = $token;

                echo json_encode(['error' => 'success', 'msg' => '../Hotel/index.php']);
            }
        } else {
          echo json_encode(['error' => 'error', 'msg' => ''.$error.'']);
        }

    }
