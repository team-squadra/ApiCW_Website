<?php

$user_name = $_SESSION["name"];
include '../Connecter/connecterlink.php';
$clinklocal = $clink;

//The data to send to the API
$postData = array(
    'user_name' => $user_name
);

$ch = curl_init( ''.$clinklocal.'api/bookings/selectedbooking');
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
    echo 'No responce';
}


// Decode the response
$responseData = json_decode($response, true);


?>