<!doctype html>
<html class="no-js"  lang="en">
	<?php
	session_start();
	
	if(!isset($_SESSION['status'])){
		header('Location: ../Access/login.php');
	} 
	else if($_SESSION['status'] !='user')
	{
		header('Location: ../index.php');
    }
    else{

	}
	?>

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>HotelBook</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="../logo/logo1.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="css/responsive.css" />

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/review/style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Hotel<span>Book
									<sub>
										<img src="../logo/logo1.png"
											style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
									</sub>
									</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->

								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">Home</a></li>
										<li class="smooth-menu"><a href="#gallery">Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Hotels </a></li>
										<li class="smooth-menu"><a href="#spo">Special Offers</a></li>
										<li class="smooth-menu"><a href="#blog">blog</a></li>
										<li class="smooth-menu"><a href="#subs">Make a Review</a></li>
										<li><a href="Hotelbooking.php">My bookings</a></li>
										<li>
											<!-- <a href="php/logout.php"> -->
											<a class="book-btn" href="../Access/logout.php">LogOut</a>
		                                   <!-- </a> -->
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->		

		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful SriLanka 

									</h2>
									<a href="#gallery">
										<div class="about-btn">
											<button  class="about-view">
												explore now
											</button>
										</div><!--/.about-btn-->
									</a>
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="images/service/s1.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									amazing tour packages
									</a>
								</h2>
								<p>Enjoy unforgettable tour packages offered by HotelBook.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="images/service/s2.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										book top class hotel
									</a>
								</h2>
								<p>Up to 80% off on hotels. Over 500,000 Satisfied Customers.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="images/service/s3.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										online trip planing
									</a>
								</h2>
								<p>Use our Online trip planner to get a personalized vacation</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						<p>
							Travel gives us many amazing experiences, but perhaps less obvious is the effect our travels 
							have on the places and people we visit.
						</p>
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="images/gallary/sigiriya 570x320.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Sigiriya
												</a>
												<p>
													<span>20 tours</span>
													<span>15 places</span>
												</p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="images/gallary/ella 570x320.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Ella
												</a>
												<p><span>12 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="images/gallary/udawalawa 370x670.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Udawalawe National Park 
												</a>
												<p><span>25 tours</span><span>10 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="images/gallary/kandy 370x320.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Kandy 
												</a>
												<p><span>18 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="images/gallary/arugam bay 370x320.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Arugam Bay
												</a>
												<p><span>14 tours</span><span>12 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="images/gallary/kadadora 770x320.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Kadadora Temple
												</a>
												<p><span>14 tours</span><span>6 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->

		<!--discount-offer end-->

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Our Hotels List
					</h2>
					<p>
						Find the perfect place to stay with us
					</p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						<?php 
						include 'Controllers/get_hotels.php';
						include 'Controllers/Homefunctions.php';

						foreach($responseData AS $response) {

							$name = $response['name'];
							$email = $response['email'];
							$phone_number = $response['phone_number'];
							$parking = $response['parking'];
							$spa = $response['spa'];
							$bar = $response['bar'];
							$pool = $response['pool'];
							$wifi = $response['wifi'];
							$description = $response['description'];
							$hotelImage = $response['hotelImage'];

							$set_description = setdescription($description);
							$set_spa = spaicon($spa,$wifi);
							$set_parking = parkingicon($parking,$wifi);
							$set_bar = baricon($bar,$wifi);
							$set_pool = poolicon($pool,$wifi);
						
							if($hotelImage == ""){
								echo'
								<div class="col-md-4 col-sm-6">
									<div class="single-package-item">
										<div class="single-package-item-txt">
											<h3>'.$name.'</h3>
											<div class="packages-para">
												<p>
													<span>
														'.$set_parking.'
													</span>
													'.$set_spa.'
												</p>
												<p>
													<span>
														 '.$set_bar.'
													</span>
													 '.$set_pool.'
												</p>
												<p>
													'.$set_description.' ... <a href="/this/story">Read More</a>
												</p>
											</div><!--/.packages-para-->
											<a href="Hotelbooking.php">
												<div class="about-btn">
													<button  class="about-view packages-btn">
														book now
													</button>
												</div><!--/.about-btn-->
											</a>
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->  
								</div><!--/.col--> 
								';
							}
							else{
								echo'
								<div class="col-md-4 col-sm-6">
									<div class="single-package-item">
										<img src="data:image/png;base64,' . $hotelImage . '">
										<div class="single-package-item-txt">
											<h3>'.$name.'</h3>
											<div class="packages-para">
												<p>
													<span>
														'.$set_parking.'
													</span>
													'.$set_spa.'
												</p>
												<p>
													<span>
														 '.$set_bar.'
													</span>
													 '.$set_pool.'
												</p>
												<p>
													'.$set_description.' ... <a href="#">Read More</a>
												</p>
											</div><!--/.packages-para-->
											<a href="Hotelbooking.php">
												<div class="about-btn">
													<button  class="about-view packages-btn">
														book now
													</button>
												</div><!--/.about-btn-->
											</a>
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->  
								</div><!--/.col--> 
								';
								}			
						}
						?>

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						clients reviews
					</h2>
					<p>
						Our Satisfied Clients 
					</p>

				</div><!--/.gallery-header-->
				<div class="owl-carousel owl-theme" id="testemonial-carousel">

					<?php include 'Controllers/get_review.php';
						foreach($responseData AS $response) {

							$name = $response['name'];
							$location = $response['location'];
							$review = $response['review'];
							$reviewImage = $response['reviewImage'];
						
							if(empty($name)){
								// header("Location:../login.html");
								echo "No responce from server";
							}
							else{
								echo'

								<div class="home1-testm item">
									<div class="home1-testm-single text-center">
										<div class="home1-testm-img">
											<img src="data:image/png;base64,' . $reviewImage . '" alt="img"/>
										</div><!--/.home1-testm-img-->
										<div class="home1-testm-txt">
											<span class="icon section-icon">
												<i class="fa fa-quote-left" aria-hidden="true"></i>
											</span>
											<p>
												'.$review.'
											</p>
											<h3>
												<a href="#">
													'.$name.'
												</a>
											</h3>
											<h4>'.$location.'</h4>
										</div><!--/.home1-testm-txt-->	
									</div><!--/.home1-testm-single-->

								</div><!--/.item-->
								
								';
							}
						}
					?>

					
				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->


		<!--special-offer start-->
		<section id="spo" class="special-offer">
			<div class="container">
				<div class="special-offer-content">
					<div class="row">
						<div class="col-sm-8">
							<div class="single-special-offer">
								<div class="single-special-offer-txt">
									<h2>Hotel Sigiriya</h2>
									<div class="packages-review special-offer-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2324 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="packages-para special-offer-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<span>
												<i class="fa fa-angle-right"></i> 2 person
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  5 star accomodation
											</span>
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  food facilities
											</span>  
										</p>
										<p class="offer-para">
											At the beating heart of the cultural triangle of the country, cocooned within the Sigiriya Natural Reserve and offering a glorious view of the world renowned Sigiriya Rock fortress, lies Hotel Sigiriya, an eco hotel taking one back to the stories of kings and dynasties. Entwined as one with nature, this rustic luxury hotel is also the gateway to bird trails, jungle treks, elephant watching and safaris through the nearby National Parks, all with the assistance of the Resident Naturalist. 
										</p>
									</div><!--/.packages-para-->
									<div class="offer-btn-group">
										<div class="about-btn">
											<button  class="about-view packages-btn offfer-btn">
												make tour
											</button>
										</div><!--/.about-btn-->
										<div class="about-btn">
											<button  class="about-view packages-btn">
												book now
											</button>
										</div><!--/.about-btn-->
									</div><!--/.offer-btn-group-->
								</div><!--/.single-special-offer-txt-->
							</div><!--/.single-special-offer-->
						</div><!--/.col-->
						<div class="col-sm-4">
							<div class="single-special-offer">
								<div class="single-special-offer-bg">
									<img src="images/offer/offer-shape.png" alt="offer-shape">
								</div><!--/.single-special-offer-bg-->
								<div class="single-special-shape-txt">
									<h3>special offer</h3>
									<h4><span>40%</span><br>off</h4>
									<p><span>$480</span><br>reguler $ 800</p>
								</div><!--/.single-special-shape-txt-->
							</div><!--/.single-special-offer-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.special-offer-content-->
			</div><!--/.container-->

		</section><!--/.special-offer end-->
		<!--special-offer end-->

		<!--blog start-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								latest news
							</h2>
							<p>
								Travel News from all over the SriLanka 
							</p>
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">
							<?php include 'Controllers/get_news.php';
								foreach($responseData AS $response) {

									$hedding = $response['hedding'];
									$content = $response['content'];
									$date = $response['date'];
									$newsImage = $response['newsImage'];
									$id = $response['_id'];
								
									if(empty($id)){
										// header("Location:../login.html");
										echo "No responce from server";
									}
									else{
										echo'
											<div class="col-sm-4 col-md-4">
												<div class="thumbnail">
													<h2>trending news <span>'.$date.'</span></h2>
													<div class="thumbnail-img">
													<img src="data:image/png;base64,' . $newsImage . '" alt="img"/>
														<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
													
													</div><!--/.thumbnail-img-->
												
													<div class="caption">
														<div class="blog-txt">
															<h3>
																<a href="#">
																	'.$hedding.'
																</a>
															</h3>
															<p>
																'.$content.'
															</p>
															<a href="#">Read More</a>
														</div><!--/.blog-txt-->
													</div><!--/.caption-->
												</div><!--/.thumbnail-->

											</div><!--/.col-->
								
										';
									}
								}
							?>
							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<!-- <form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form> -->
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
						<div class="image-holder">
							<img src="images/registration-form-6.jpg" alt="">
						</div>
						<form action="Controllers/set_review.php" method="post" enctype="multipart/form-data">
							<h3>Make a Review</h3>
							<div class="form-row">
								<input type="text" class="form-ctrl" placeholder="Enter Username" name="uname" id="uname" required>
								<input type="text" class="form-ctrl" placeholder="Location" name="location" id="location" required>
							</div>
							<textarea name="review" id="review" placeholder="Message" class="form-ctrl" style="height: 130px;"></textarea>
							<button class="buttonw" type="submit" name="upload">Review Now
								<i class="zmdi zmdi-long-arrow-right"></i>
							</button>
						</form>
				</div>

			 </div> <!-- div end -->

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										Hotel<span>Book
										<sub>
											<img src="../logo/logo1.png"
												style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
										</sub>
										</span>
									</a>
									<p>
										best hotel agency
									</p>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#home">home</a></p>
									<p><a href="#gallery">destination</a></p>
									<p><a href="#pack">Hotels</a></p>
									<p><a href="#spo">special offers</a></p>
									<p><a href="#blog">blog</a></p>
									<p><a href="#subs">Make a Review</a></p>

								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p>Colombo</p>
									<p>Yala</p>
									<p>Dambulla</p>
									<p>Bandarawela</p>
									<p>Kaluthara</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+94 11 265 98744 </p>
									<p>info@bookme.com</p>
									<p>294, Galle Road, Bambalapitiya, Colombo 04</p>
									<p>Colombo,Sri Lanka</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fab fa-facebook-f"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fab fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fab fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2020 <a href="#">Team Squadra</a>. All Right Reserved®</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

		<script src="js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="js/custom.js"></script>

		<!-- fa fa icons -->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	</body>

</html>