<?php
session_start();
include '../../../Connecter/connecterlink.php';
$clinklocal = $clink;

if (isset($_POST['update'])){

    if(isset($_SESSION['email'])){

        $hotel_email = $_SESSION['email'];
        $hotel_name = $_SESSION['name'];
        $hotel_phone_number_input_atr = $_POST['hotel_phone_number_input_atr'];
        $hotel_location_input_atr = $_POST['hotel_location_input_atr'];
        $hotel_description_input_atr = $_POST['hotel_description_input_atr'];
        $hotel_pool_input_atr = $_POST['hotel_pool_input_atr'];
        $hotel_parking_input_atr = $_POST['hotel_parking_input_atr'];
        $hotel_spa_input_atr = $_POST['hotel_spa_input_atr'];
        $hotel_bar_input_atr = $_POST['hotel_bar_input_atr'];
        $hotel_wifi_input_atr = $_POST['hotel_wifi_input_atr'];

        $hotel_prev_image_input_atr = $_POST['hotel_prev_image_input_atr'];
        $hotel_image_input_atr = $_FILES['hotel_image_input_atr']["name"];

        if($hotel_image_input_atr == ""){
            $final_hotel_image = $hotel_prev_image_input_atr;
        }
        else{
            //Image upload 
            $target_file = basename($_FILES["hotel_image_input_atr"]["name"]);

            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","gif");

            // Check extension
            if( in_array($imageFileType,$extensions_arr) ){
                // Convert to base64 
                $final_hotel_image = base64_encode(file_get_contents($_FILES['hotel_image_input_atr']['tmp_name']) );
            }
            else{

            }
        }

        // The data to send to the API
        $postData = array(

            'email' => $hotel_email,
            'name' => $hotel_name,
            'phone_number' => $hotel_phone_number_input_atr,
            'location' => $hotel_location_input_atr,
            'description' => $hotel_description_input_atr,
            'hotelImage' => $final_hotel_image,
            'pool' => $hotel_pool_input_atr,
            'parking' => $hotel_parking_input_atr,
            'spa' => $hotel_spa_input_atr,
            'bar' => $hotel_bar_input_atr,
            'wifi' => $hotel_wifi_input_atr
            
        );

        // Setup cURL
        $ch = curl_init( ''.$clinklocal.'api/hotels/updatehotel');
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
        $function_status = $responseData['function_status'];

        if($function_status == "Success"){
            echo '<script>location ="../../profile.php";</script>';
        }else{
            echo '<script>alert("Something went wrong");location ="../../profile.php";</script>';
        }

        
    }else{

    }
        
}
?>