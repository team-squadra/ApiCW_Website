<?php
session_start();

if (!isset($_SESSION['status'])) {
    header('Location: ../Access/login.php');
} else if ($_SESSION['status'] != 'admin') {
    header('Location: ../index.php');
} else {
}
?>

<!DOCTYPE html>
<html>
<title>HotelBook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="../logo/logo1.png" />
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!--===============================================================================================-->
<link rel="stylesheet" href="css/style.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
html,
body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif
}
</style>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right">
            <center>
                <label style="color:Gray;">Hotel</label>
                <label style="color:LightGray;">Book
                    <sub>
                        <img src="../logo/logo1.png"
                            style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                    </sub>
                </label>
            </center>
        </span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img src="images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar">
                <span><strong><?php echo $_SESSION['name']; ?></strong></span><br>
                <span style="font-size: 10px;color:lightgrey;"><i class="fas fa-at"></i>
                    <?php echo $_SESSION['email']; ?></span>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        <div class="w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
                onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-th-large"></i>  Dashbord</a>
            <a href="manage_users.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-users"></i> 
                Manage Users</a>
            <a href="manage_hotel.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fas fa-users"></i> 
                Manage Hotels</a>
            <a href="../Access/logout.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-sign-out-alt"></i> 
                logout</a>
        </div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fas fa-users"></i> Manage Hotels</b></h5>
        </header>

        <header class="w3-container" style="padding-top:22px">
            <h5 style="margin-left: 30px;"><i class="far fa-trash-alt"></i> Remove Hotel</h5>
        </header>
        <div class="w3-row-padding w3-margin-bottom" style="padding: 30px;overflow-x:auto;">
            <table style="margin-left: 30px;">
                <tr>
                    <form action="Controllers/php/php_removeUser.php" method="POST">
                        <td style="padding: 10px;"><input class="w3-input" type="text" name="uname"
                                placeholder="Hotel name" list="userlist" required></td>
                        <td style="padding: 10px;"><button class="w3-button w3-red" name="remove">Remove Hotel</button>
                        </td>
                    </form>

                </tr>
            </table>
        </div>



        <header class="w3-container" style="padding-top:22px">
            <h5 style="margin-left: 30px;"><i class="fas fa-clipboard-list"></i> Hotels details <label
                    id="hcountval"></label></h5>
        </header>

        <div class="w3-row-padding w3-margin-bottom" style="padding: 60px;overflow-x:auto;max-height: 500px;">
            <table id="usertb">
                <tr>
                    <th>User ID</th>
                    <th>User name</th>
                    <th>User Email</th>
                    <th>Phone Number</th>
                    <th>Joined Date</th>
                </tr>
                <?php
                include 'Controllers/php/php_loadAllUsers.php';
                $hcount = 0;
                foreach ($responseData as $response) {

                    $status = $response['status'];
                    if ($status == "hotel") {
                        $hcount++;
                        echo'
                        <tr>
                            <td>'.$response['_id'].'</td>
                            <td>'.$response['name'].'</td>
                            <td>'.$response['email'].'</td>
                            <td>'.$response['phone_number'].'</td>
                            <td>'.$response['Date'].'</td>
                        </tr>
                        ';
                        
                    }else{

                    }
                }
                echo '
                <script>
                        document.getElementById("hcountval").innerHTML = "('.$hcount.')";
                </script>
                ';

            echo'</table>';

            echo '<datalist id="userlist">';
            foreach ($responseData as $response) {

                $status = $response['status'];
                if ($status == "hotel") {
                    echo'<option value="'.$response['name'].'">';
                    
                }else{

                }
            }
            echo'</datalist>';
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
        <hr>
        <center>
            <label style="color:Gray;">Hotel</label>
            <label style="color:LightGray;">Book
                <sub>
                    <img src="../logo/logo1.png"
                        style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                </sub>
            </label>
        </center>
    </footer>

    <!-- End page content -->
    </div>

    <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>

</body>

</html>