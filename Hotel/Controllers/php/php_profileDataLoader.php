<?php
include '../Connecter/connecterlink.php';
$clinklocal = $clink;

    if (isset($_SESSION["email"])) {


        // The data to send to the API
        $postData = array(
            'email' => $_SESSION["email"]
        );

        // Setup cURL
        $ch = curl_init(''.$clinklocal .'api/hotels/selectedhotel');
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

        $function_status = $responseData['function_status'];

        if ($function_status == "Success") {
            $hotel_id = $responseData['all'][0]['_id'];
            $hotel_name = $responseData['all'][0]['name'];
            $hotel_email = $responseData['all'][0]['email'];
            $hotel_phone_number = $responseData['all'][0]['phone_number'];
            $hotel_location = $responseData['all'][0]['location'];
            $hotel_description = $responseData['all'][0]['description'];
            $hotel_hotelImage = $responseData['all'][0]['hotelImage'];
            $hotel_pool = $responseData['all'][0]['pool'];
            $hotel_parking = $responseData['all'][0]['parking'];
            $hotel_spa = $responseData['all'][0]['spa'];
            $hotel_bar = $responseData['all'][0]['bar'];
            $hotel_wifi = $responseData['all'][0]['wifi'];
        } else {
        }
    } else {
        echo "not found";
    }

