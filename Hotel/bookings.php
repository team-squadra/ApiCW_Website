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
                    <li class="colorlib-active"><a href="bookings.php">Bookings</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
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
                            <h2 class="mb-4">Bookings</h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php include 'Controllers/php/php_loadBookingData.php';
                        $x = 0;
                        foreach ($responseData as $response) {

                            $x++;
                            $user_name = $response['user_name'];
                            $check_in = $response['check_in'];
                            $check_out = $response['check_out'];
                            $rooms = $response['rooms'];
                            $roomtype = $response['roomtype'];
                            $adaults = $response['adaults'];
                            $childrens = $response['childrens'];
                            $totprice = $response['totprice'];

                            echo ' 
                        <div class="w3-third">
                            <div class="w3-container w3-padding-16 roomcrd">
                                <div class="ftco-animate">
                                    <label class="category mb-3 d-block" style="color: orangered;" title="Room ID" ><i class="fas fa-user"></i> ' . $user_name . '</label>

                                    <label class="lbl_tag" title="Check in"><i class="fas fa-sign-in-alt"></i> ' . $check_in . '</label>
                                    <label class="lbl_tag" title="Check out"><i class="fas fa-sign-out-alt"></i> ' . $check_out . '</label><br>
                                    <label class="lbl_tag" title="Rooms type"><i class="fas fa-list"></i> ' . $roomtype . '</label>
                                    <label class="lbl_tag" title="Rooms"><i class="fas fa-door-open"></i> ' . $rooms . '</label><br>
                                    <label class="lbl_tag" title="Adaults"><i class="fas fa-restroom"></i> ' . $adaults . '</label>
                                    <label class="lbl_tag" title="Childrens"><i class="fas fa-child"></i> ' . $childrens . '</label><br>
                                    <label class="category mb-3 d-block pricetag">
                                        <center><i class="fas fa-dollar-sign"></i> ' . $totprice . '</center>
                                    </label>

                                </div>
                            </div>
                        </div>
                        ';
                        }
                        if ($x == 0) {
                            echo '
                            <div class="w3-third">
                            </div>
                            <div class="w3-third">
                                <img src="images/nodata.jpg" alt="nodata" style="width: 300px; height:300px;">
                                <center>
                                <label>No Bookings for today :(</label>
                                </center>
                            </div>
                            <div class="w3-third">
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

</body>

</html>