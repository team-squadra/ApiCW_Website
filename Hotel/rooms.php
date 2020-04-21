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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <li class="colorlib-active"><a href="rooms.php">Rooms</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="../Access/logout.php">Log out</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer" style="display: none;">
                <p>
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
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">Rooms</h2>
                            <div class="card dnone" id="addRoomDiv">
                                <form action="Controllers/php/php_addRoom.php" method="POST">
                                    <p class="mb-4">
                                        <i class="fas fa-tag"></i>
                                        <input type="number" class="cusInput2" placeholder="Room ID" name="r_id" id="r_id_id" required>
                                    </p>
                                    <p class="mb-4">
                                        <i class="fas fa-list"></i>
                                        <select class="cusInput2" name="r_type" id="r_type_id">
                                            <option value="Single">Single</option>
                                            <option value="Double">Double</option>
                                            <option value="Quad">Quad</option>
                                            <option value="Queen">Queen</option>
                                            <option value="King">King</option>
                                        </select>
                                    </p>
                                    <p class="mb-4">
                                        <i class="fas fa-users"></i>
                                        <input type="number" class="cusInput2" placeholder="Room capacity" name="r_capacity" id="r_capacity_id" required>
                                    </p>
                                    <p class="mb-4">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input type="number" class="cusInput2" placeholder="Price" name="r_price" id="r_price_id" required>
                                    </p>
                                    <p class="mb-4">
                                        <i class="far fa-eye"></i>
                                        <input type="text" class="cusInput2" placeholder="View" name="r_view" id="r_view_id" required>
                                    </p>
                                    <hr>
                                    <label>
                                        <img src="../images/air_conditioner.png" class="iconImg mright cursorp " title="Air conditioner" onclick="toggle_icons(1)" id="air_ico_view">
                                        <img src="../images/tv.png" class="iconImg mright cursorp " title="TV" onclick="toggle_icons(2)" id="tv_ico_view">
                                        <img src="../images/mini_bar.png" class="iconImg mright cursorp " title="Mini bar" onclick="toggle_icons(3)" id="bar_ico_view">
                                        <img src="../images/wardrobe.png" class="iconImg mright cursorp " title="Wardrobe" onclick="toggle_icons(4)" id="wardrobe_ico_view">
                                        <img src="../images/safe.png" class="iconImg mright cursorp " title="Safe" onclick="toggle_icons(5)" id="safe_ico_view">
                                        <img src="../images/soundproof.png" class="iconImg mright cursorp " title="Soundproof" onclick="toggle_icons(6)" id="sound_ico_view">
                                        <img src="../images/bathroom.png" class="iconImg mright cursorp " title="Bathroom" onclick="toggle_icons(7)" id="bathroom_ico_view">
                                    </label>
                                    <hr>
                                    <p class="mb-4 dnone">
                                        <input type="text" style="width: 20px;" value="1" id="air_ico_val_id" name="air_ico_val">
                                        <input type="text" style="width: 20px;" value="1" id="tv_ico_val_id" name="tv_ico_val">
                                        <input type="text" style="width: 20px;" value="1" id="bar_ico_val_id" name="bar_ico_val">
                                        <input type="text" style="width: 20px;" value="1" id="wardrobe_ico_val_id" name="wardrobe_ico_val">
                                        <input type="text" style="width: 20px;" value="1" id="safe_ico_val_id" name="safe_ico_val">
                                        <input type="text" style="width: 20px;" value="1" id="sound_ico_val_id" name="sound_ico_val">
                                        <input type="text" style="width: 20px;" value="0" id="bathroom_ico_val_id" name="bathroom_ico_val">
                                    </p>
                                    <center>
                                        <button class="button btn-clr" style="max-width: 200px;" name="addaroom" type="submit" onclick="adaroom_load()">Add a Room</button>
                                        <br><i class="fas fa-times cursorp" onclick="switchDiv(0)"></i>
                                        <div class="show-progress" id="adaroom_loading_bar"></div>
                                    </center>
                                </form>
                            </div>
                            <button class="button btn-clr" onclick="switchDiv(1)" id="addRoomBtn">Add a Room</button>
                        </div>
                    </div>

                    <div class="w3-row">

                        <?php include 'Controllers/php/php_loadRoomData.php';
                        foreach ($responseData as $response) {
                            $room_name = $response['room_name'];
                            $room_type = $response['roomtype'];
                            $room_capacity = $response['room_capacity'];
                            $room_price = $response['rmprice'];
                            $room_view = $response['view'];
                            $ac = $response['ac'];
                            $tv = $response['tv'];
                            $minibar = $response['minibar'];
                            $wardrobe = $response['wardrobe'];
                            $safe = $response['safe'];
                            $soundproof = $response['soundproof'];
                            $bathroom = $response['bathroom'];

                            echo ' 
                        <div class="w3-third">
                            <div class="w3-container w3-padding-16 roomcrd">
                                <div class="ftco-animate">
                                    <label class="category mb-3 d-block" style="color: orangered;" title="Room ID" ><i class="fas fa-tag"></i> ' . $room_name . '</label>

                                    <label class="lbl_tag" title="Room type"><i class="fas fa-list"></i> ' . $room_type . '</label>
                                    <label class="lbl_tag" title="Price"><i class="fas fa-dollar-sign"></i> ' . $room_price . '</label>
                                    <label class="lbl_tag" title="room_capacity"><i class="fas fa-users"></i> ' . $room_capacity . '</label><br>
                                    <label class="lbl_tag" title="View"><i class="far fa-eye"></i> ' . $room_view . '</label><br>
                                    <label>
                        ';

                            if ($ac == 1) {
                                echo '<img src="../images/air_conditioner.png" class="iconImg iconBG mright" title="Air conditioner">';
                            }
                            if ($tv == 1) {
                                echo '<img src="../images/tv.png" class="iconImg iconBG mright" title="TV">';
                            }
                            if ($minibar == 1) {
                                echo '<img src="../images/mini_bar.png" class="iconImg iconBG mright" title="Mini bar">';
                            }
                            if ($wardrobe == 1) {
                                echo '<img src="../images/wardrobe.png" class="iconImg iconBG mright" title="Wardrobe">';
                            }
                            if ($safe == 1) {
                                echo '<img src="../images/safe.png" class="iconImg iconBG mright" title="Safe">';
                            }
                            if ($soundproof == 1) {
                                echo '<img src="../images/soundproof.png" class="iconImg iconBG mright" title="Soundproof">';
                            }
                            if ($bathroom == 1) {
                                echo '<img src="../images/bathroom.png" class="iconImg iconBG mright" title="Bathroom">';
                            }

                            echo '
                                    </label>
                                </div>
                            </div>
                        </div>
                        ';
                        }
                        ?>
                    </div>

                </div>
            </section>
            <footer class="ftco-footer ftco-bg-dark ftco-section">
                <div class="container px-md-5">
                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4 ml-md-4">
                                <h2 class="ftco-heading-2">#HotelBook</h2>
                                <label>
                                    <i class="fab fa-facebook-f mright"></i>
                                    <i class="fab fa-instagram mright"></i>
                                    <i class="fab fa-twitter mright"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Contact</h2>
                                <ul class="list-unstyled categories">
                                    <li><i class="fas fa-map-marker"></i> 198 West 21th Street, Suite 721 New York NY
                                        10016</li>
                                    <li><i class="fas fa-phone-alt"></i> + 1235 2355 98</li>
                                    <li><i class="fas fa-at"></i> info@hotelbook.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <label style="color:Gray;">Hotel</label>
                                <label style="color:LightGray;">Book
                                    <sub>
                                        <img src="../logo/logo1.png" style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                                    </sub>
                                </label>
                            </center>

                        </div>
                    </div>
                    <div class="row dnone">
                        <div class="col-md-12">

                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
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

</body>

</html>