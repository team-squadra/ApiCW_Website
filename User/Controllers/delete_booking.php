<?php

include '../../Connecter/connecterlink.php';
$clinklocal = $clink;

if(isset($_POST['delete'])){
    // $user_name = 'temp user';
    $id = $_POST['delete'];

    //The data to send to the API
    $postData = array(
        '_id' => $id
    );

    // Setup cURL
    $ch = curl_init( ''.$clinklocal.'api/bookings/deletebooking');
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
    $bookingid = $responseData['message'];
    if($bookingid == ""){
        echo 'Not a valid request';
    }
    else{
        header("Location: ../Hotelbooking.php");
    }
}
?>



?>