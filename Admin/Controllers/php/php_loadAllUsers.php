<?php
include '../Connecter/connecterlink.php';
$clinklocal = $clink;

$ch = curl_init('' . $clinklocal . 'api/user/getallusr');
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => TRUE
));
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 200000);
// Send the request
$response = curl_exec($ch);

// Check for errors
if ($response === FALSE) {
    die(curl_error($ch));
    echo 'No responce';
}


// Decode the response
$responseData = json_decode($response, true);
