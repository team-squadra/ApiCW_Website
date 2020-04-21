<?php

session_start();
$uname= $_SESSION["name"];

if(isset($_POST['upload'])){

    $user_name = $uname;
    $hotel_name = $_POST['hotel_name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $rooms = $_POST['rooms'];
    $adaults = $_POST['adaults'];
    $childrens = $_POST['childrens'];
    $roomtype = $_POST['roomtype'];


    function getprice($hotel_name,$roomtype){
        //The data to send to the API
        include '../../Connecter/connecterlink.php';
        $clinklocal = $clink;   

        $postData = array(
            'hotel_name' => $hotel_name,
            'roomtype' => $roomtype
        );

        $ch = curl_init( ''.$clinklocal.'api/rooms/selectedroom');
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
        return $responseData[0]['rmprice'];
    }

    function gethotelimg($hotel_name) {
            include '../../Connecter/connecterlink.php';
            $clinklocal = $clink;
            //The data to send to the API
            $postData = array(
                'name' => $hotel_name
            );

            $ch = curl_init( ''.$clinklocal.'api/hotels/nmselectedhotel');
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
            return $responseData[0]['hotelImage'];
    }
      
    function getdays($check_in,$check_out){

        // Declare and define two dates 
        $date1 = strtotime($check_in); 
        $date2 = strtotime($check_out); 

        // Formulate the Difference between two dates 
        $diff = abs($date2 - $date1); 

        // get years
        $years = floor($diff / (365*60*60*24)); 

        // get months
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 

        // get days
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 

        return $days;

    }

    $datediffrance = getdays($check_in,$check_out);
    $roomprice = getprice($hotel_name,$roomtype);
    $hotelImage = gethotelimg($hotel_name);

    if($roomprice == ""){
        header("Location: ../Hotelbooking.php");
        echo '<script type="text/javascript">';
        echo ' alert("Selected room type unavailable at the moment")';
        echo '</script>';
        header("Location: ../Hotelbooking.php");
    }
    else{

        include '../../Connecter/connecterlink.php';
        $clinklocal = $clink;

        $totprice = $roomprice * $datediffrance * $rooms;
    
        //The data to send to the API
        $postData = array(
            'user_name' => $user_name,
            'hotel_name' => $hotel_name,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'rooms' => $rooms,
            'roomtype' =>$roomtype,
            'adaults' => $adaults,
            'childrens' => $childrens,
            'totprice' => $totprice,
            'hotelImage' => $hotelImage
        );

        // Setup cURL
        $ch = curl_init( ''.$clinklocal.'api/bookings/regbooking');
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
        $bookingid = $responseData['booking'];
        if($bookingid == ""){
            echo 'Not a valid request';
        }
        else{
            header("Location: ../Hotelbooking.php");
        }
    }

}
?>

