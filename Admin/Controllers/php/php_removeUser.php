<?php
include '../../../Connecter/connecterlink.php';
$clinklocal = $clink;

if(isset($_POST['remove'])){
    $uname = $_POST['uname'];

    //The data to send to the API
    $postData = array(
        'name' => $uname
    );

    // Setup cURL
    $ch = curl_init(''.$clinklocal.'api/user/deleteusr');
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
    echo '<script>location ="../../manage_users.php";</script>';
}
?>