<!DOCTYPE html>
<html lang="en">

<head>
    <title>HotelBook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="logo/logo1.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
</head>

<style>
    .centered {
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .progress {
        border-radius: 5px;
        width: 100%;
        height: 4px;
        position: relative;
        background: red;
    }

    .progress::before {
        position: absolute;
        content: "";
        width: 0%;
        height: 4px;
        top: 0;
        left: 0;
        background-color: orange;
        animation: wait 1s infinite;
        -webkit-animation: wait 1s infinite;
        -moz-animation: wait 1s infinite;
    }

    @keyframes wait {
        10% {
            width: 10%
        }

        30% {
            width: 30%
        }

        50% {
            width: 50%
        }

        70% {
            width: 70%
        }

        100% {
            width: 100%
        }
    }

    .title {
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        line-height: 1.2;
        width: 200px;
        padding: 50px;
    }
</style>

<body>
    <div id="loading_div" style="width: 100%; height: 100%;">
        <div class="centered">
            <div class="title">
                <center>
                    <label style="color:Gray;">Hotel</label>
                    <label style="color:LightGray;">Book
                        <sub>
                            <img src="logo/logo1.png" style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                        </sub>
                    </label>
                </center>
            </div>
            <br>
            <div class="progress"></div>
        </div>
    </div>
</body>

<?php
session_start();


if (!isset($_SESSION['status'])) {
    header('Location: Access/login.php');
} else if ($_SESSION['status'] == 'admin') {
    header('Location: Admin/index.php');
} else if ($_SESSION['status'] == 'user') {
    header('Location: User/Home.php');
} else if ($_SESSION['status'] == 'hotel') {
    header('Location: Hotel/index.php');
} else {
}
?>

</html>