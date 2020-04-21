<?php
include '../../Connecter/connecterlink.php';
$clinklocal = $clink;

if (isset($_POST['upload'])) {

    $name = $_POST['uname'];
    $location = $_POST['location'];
    $review = $_POST['review'];

    //The data to send to the API
    $postData = array(
        'name' => $name,
        'location' => $location,
        'review' => $review
        // 'reviewImage' => $image_base64
    );

    // Setup cURL
    $ch = curl_init( ''.$clinklocal.'api/review/setreview');
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
    $review = $responseData['review'];
    if($review == ""){
       echo 'Not a valid request';
   }
   else{
       header("Location: ../Home.php");
   }

}
?>