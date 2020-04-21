<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('Location: ../Access/login.php');
} else if ($_SESSION['status'] != 'hotel') {
    header('Location: ../index.php');
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HotelBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../logo/logo1.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/animate.css">
    <!--==============================================================================================-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/aos.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/flaticon.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <!--===============================================================================================-->

</head>

<body>

    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
            <h1 id="colorlib-logo"><a href="index.php">
                    <center>
                        <label style="color:Gray;">Hotel</label><br>
                        <label style="color:LightGray;">Book
                            <sub>
                                <img src="../logo/logo1.png" style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                            </sub>
                        </label>
                    </center>
                </a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bookings.php">Bookings</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li class="colorlib-active"><a href="profile.php">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="../Access/logout.php">Log out</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer" style="display: none;">
                <label>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
            </div>
        </aside> <!-- END COLORLIB-ASIDE -->
        <div id="colorlib-main">
            <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="js-fullheight d-flex justify-content-center align-items-center">
                    <div class="col-md-8 text text-center" style="overflow: auto;">
                        <?php
                        include 'Controllers/php/php_profileDataLoader.php';

                        if ($function_status == "Success") {

                            if ($hotel_hotelImage == "") {
                                echo '<div class="img mb-4" style="background-image: url(../logo/full_logo.png);"></div>';
                            } else {
                                echo '<div class="img mb-4" style="background-image: url(data:image/png;base64,' . $hotel_hotelImage . ');"></div>';
                            }

                            echo '<div class="desc"><h1 class="mb-4">' . $hotel_name . '</h1>';

                            //<!--===============================================================================================-->
                            echo '<div id="profile_details_view" >';

                            echo '
                                <p class="mb-4" style="font-size: 10px;"><i class="fa fa-at mright" aria-hidden="true" title="Email"></i>' . $hotel_email . '</p>
                                <p class="mb-4" style="font-size: 10px;"><i class="fa fa-phone mright" aria-hidden="true" title="Contact number"></i>' . $hotel_phone_number . '</p>
                                <p class="mb-4" style="font-size: 10px;"><i class="fa fa-map-marker mright" aria-hidden="true" title="Location"></i>' . $hotel_location . '</p>
                                <p class="mb-4" style="font-size: 10px;"><i class="fa fa-align-left mright" aria-hidden="true" title="Description"></i>' . $hotel_description . '</p>
                                ';
                            if ($hotel_pool == "1") {
                                echo '<i class="fa fa-swimming-pool mright " aria-hidden="true" title="Pool"></i>';
                            } else {
                                echo '<i class="fa fa-swimming-pool mright notAve" aria-hidden="true" title="Pool"></i>';
                            }

                            if ($hotel_parking == "1") {
                                echo '<i class="fa fa-parking mright " aria-hidden="true" title="Parking"></i>';
                            } else {
                                echo '<i class="fa fa-parking mright notAve" aria-hidden="true" title="Parking"></i>';
                            }

                            if ($hotel_spa == "1") {
                                echo '<i class="fa fa-spa mright " aria-hidden="true" title="Spa"></i>';
                            } else {
                                echo '<i class="fa fa-spa mright notAve" aria-hidden="true" title="Spa"></i>';
                            }

                            if ($hotel_bar == "1") {
                                echo '<i class="fa fa-glass-cheers mright " aria-hidden="true" title="Bar"></i>';
                            } else {
                                echo '<i class="fa fa-glass-cheers mright notAve" aria-hidden="true" title="Bar"></i>';
                            }

                            if ($hotel_wifi == "1") {
                                echo '<i class="fa fa-wifi mright " aria-hidden="true" title="Wifi"></i>';
                            } else {
                                echo '<i class="fa fa-wifi mright notAve" aria-hidden="true" title="Wifi"></i>';
                            }

                            echo '<br><button class="button btn-clr" style="margin-top: 40px;" onclick="switch_to_edit()">Update Profile</button>';

                            echo '</div>';
                            //<!--===============================================================================================-->

                            //<!--===============================================================================================-->
                            echo '<div id="profile_details_input" class="dnone">';
                            echo '<form id="profile_form" action="Controllers/php/php_updateProfile.php" method="POST" enctype="multipart/form-data">';
                            echo '
                                <p class="mb-4" style="font-size: 10px;"><i class="fa fa-at mright" aria-hidden="true" title="Email"></i>' . $hotel_email . '</p>
                                <p class="mb-4"><i class="fa fa-phone mright" aria-hidden="true" title="Contact number"></i><input type="text" class="cusInput" value="' . $hotel_phone_number . '" name="hotel_phone_number_input_atr" id="hotel_phone_number_input"></p>
                                <p class="mb-4"><i class="fa fa-map-marker mright" aria-hidden="true" title="Location"></i><input type="text" class="cusInput" value="' . $hotel_location . '" name="hotel_location_input_atr" id="hotel_location_input"></p>
                                <p class="mb-4">
                                <i class="fa fa-align-left mright" aria-hidden="true" title="Description"></i>
                                <textarea cols="10" rows="4" class="cusInput" name="hotel_description_input_atr" id="hotel_description_input">' . $hotel_description . '</textarea>
                                </p>
                                <p class="mb-4">
                                <input type="text" class="cusInput dnone" value="' . $hotel_hotelImage . '" name="hotel_prev_image_input_atr" id="hotel_prev_image_input">
                                </p>
                                <label class="custom-file-upload">
                                    <input type="file" name="hotel_image_input_atr" id="hotel_image_input" accept=".png, .jpg, .jpeg" onchange="get_img_name()" class="dnone"/>
                                    <i class="fas fa-upload mright"></i><i id="img_input_val">Update image</i> 
                                </label><br>
                                ';

                            echo '
                                <i class="fa fa-swimming-pool mright" aria-hidden="true" title="Pool" id="pool_ava" onclick="toggle_hotel_pool(0)" style="cursor: pointer"></i>
                                <i class="fa fa-swimming-pool mright notAve" aria-hidden="true" title="Pool" id="pool_notava" onclick="toggle_hotel_pool(1)" style="cursor: pointer"></i>

                                <i class="fa fa-parking mright" aria-hidden="true" title="Parking" id="parking_ava" onclick="toggle_hotel_parking(0)" style="cursor: pointer"></i>
                                <i class="fa fa-parking mright notAve" aria-hidden="true" title="Parking" id="parking_notava" onclick="toggle_hotel_parking(1)" style="cursor: pointer"></i>

                                <i class="fa fa-spa mright" aria-hidden="true" title="Spa" id="spa_ava" onclick="toggle_hotel_spa(0)" style="cursor: pointer"></i>
                                <i class="fa fa-spa mright notAve" aria-hidden="true" title="Spa" id="spa_notava" onclick="toggle_hotel_spa(1)" style="cursor: pointer"></i>

                                <i class="fa fa-glass-cheers mright" aria-hidden="true" title="Bar" id="bar_ava" onclick="toggle_hotel_bar(0)" style="cursor: pointer"></i>
                                <i class="fa fa-glass-cheers mright notAve" aria-hidden="true" title="Bar" id="bar_notava" onclick="toggle_hotel_bar(1)" style="cursor: pointer"></i>

                                <i class="fa fa-wifi mright" aria-hidden="true" title="Wifi" id="wifi_ava" onclick="toggle_hotel_wifi(0)" style="cursor: pointer"></i>
                                <i class="fa fa-wifi mright notAve" aria-hidden="true" title="Wifi" id="wifi_notava" onclick="toggle_hotel_wifi(1)" style="cursor: pointer"></i>

                                <input type="text" value= "' . $hotel_pool . '" style="width:30px;" id="hotel_pool_input" class="dnone" name="hotel_pool_input_atr">
                                <input type="text" value= "' . $hotel_parking . '" style="width:30px;" id="hotel_parking_input" class="dnone" name="hotel_parking_input_atr">
                                <input type="text" value= "' . $hotel_spa . '" style="width:30px;" id="hotel_spa_input" class="dnone" name="hotel_spa_input_atr">
                                <input type="text" value= "' . $hotel_bar . '" style="width:30px;" id="hotel_bar_input" class="dnone" name="hotel_bar_input_atr">
                                <input type="text" value= "' . $hotel_wifi . '" style="width:30px;" id="hotel_wifi_input" class="dnone" name="hotel_wifi_input_atr">
                                ';

                            echo '
                                    <br><button class="button btn-clr" name="update" type="submit" onclick="loadbar()">Save</button><br><br>
                                    <div class="show-progress" id="update_loading_bar"></div>
                                ';

                            echo '</form>';

                            echo '
                                    <p onclick="switch_to_profileview()"><i class="fas fa-times" id="close_btn"></i></p>
                                    </div>
                                ';
                            //<!--===============================================================================================-->

                        } else {
                            echo '<div class="desc">
                                        <h1 class="mb-4"></h1>
                                ';
                            echo $function_status;
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="Controllers/js/js_main.js"></script>
    <script>
        loadingprofile();
    </script>

</body>

</html>