<?php
session_start();
include '../../../Connecter/connecterlink.php';
$clinklocal = $clink;

if(isset($_POST['addaroom'])){

    $hotel_name = $_SESSION['name'];

    $room_name = $_POST['r_id'];
    $roomtype = $_POST['r_type'];
    $room_capacity = $_POST['r_capacity'];
    $rmprice = $_POST['r_price'];
    $view = $_POST['r_view'];

    $ac = $_POST['air_ico_val'];
    $tv = $_POST['tv_ico_val'];
    $minibar = $_POST['bar_ico_val'];
    $wardrobe = $_POST['wardrobe_ico_val'];
    $safe = $_POST['safe_ico_val'];
    $soundproof = $_POST['sound_ico_val'];
    $bathroom = $_POST['bathroom_ico_val'];
    


    //The data to send to the API
    $postData = array(
        'hotel_name' => $hotel_name,
        'room_name' => $room_name,
        'rmprice' => $rmprice,
        'roomtype' => $roomtype,
        'room_name' => $room_name,
        'room_capacity' => $room_capacity,
        'ac' => $ac,
        'tv' => $tv,
        'minibar' => $minibar,
        'wardrobe' => $wardrobe,
        'safe' => $safe,
        'soundproof' => $soundproof,
        'bathroom' => $bathroom,
        'view' => $view
    );

    // Setup cURL
    $ch = curl_init(''.$clinklocal.'api/rooms/regroom');
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
    echo '<script>location ="../../rooms.php";</script>';
}
?>

