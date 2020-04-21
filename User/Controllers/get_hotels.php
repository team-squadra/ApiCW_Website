<?php
include '../Connecter/connecterlink.php';
$clinklocal = $clink;

$ch = curl_init( ''.$clinklocal.'api/hotels/hoteldata');
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => TRUE
));
// Send the requests
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
    die(curl_error($ch));
    echo 'No responce';
}


// Decode the response
$responseData = json_decode($response, true);


?>