<?php
session_start();

include '../../../Connecter/connecterlink.php';
$clinklocal = $clink;

if(isset($_POST['sendmsg'])){

    $hotel_name = $_SESSION['name'];

    $hotel_name = $_SESSION['name'];
    $hotel_email = $_POST['hotel_email_atr'];
    $msg_subject = $_POST['msg_subject_atr'];
    $msg_body = $_POST['msg_body_atr'];

    //The data to send to the API
    $postData = array(
        'hotel_name' => $hotel_name,
        'hotel_email' => $hotel_email,
        'msg_subject' => $msg_subject,
        'msg_body' => $msg_body
    );

    // Setup cURL
    $ch = curl_init(''.$clinklocal.'api/requests/adminrequest');
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
    echo $response;

    // Print the date from the response
    echo '<script>location ="../../contact.php";</script>';
}
?>

