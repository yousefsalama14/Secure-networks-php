<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Uniocde -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <![endif]-->
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pgae Description -->
    <meta name="description" content="Secure Networks portfolio Template">
    <!-- Page Kewords -->
    <meta name="keywords" content="Secure Networks">
    <!-- Site Author -->
    <meta name="author" content="Secure Networks">
    <!-- Title -->
    <title>Careers | Secure Networks</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Section Preloader -->
    <!-- <div id="section-preloader">
		<div class="blobs">
			<div class="blob-center"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
			<div class="blob"></div>
		</div>
	</div> -->
    <!-- /.Section Preloader -->
    <!-- Section Navbar -->
    <?php include('header.php'); ?>
    <!-- /.Section Navbar -->
    <div class="main-wrapper">
        <div id="main-content" class="active">
            <!-- Section Breadcrumb 1 -->
            <div id="section-breadcrumb1" class="bg8">
                <div class="container">
                    <div class="row">
                        <div class="content col-12">
                            <h1>Careers</h1>
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li class="current"><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Section Breadcrumb 1 -->
            <!-- Section Careers -->
            <div id="section-ourportfolio3">
				<div class="container">
					<div class="row m-top-25">
						<div class="portfolioContainer col-12">
							<div class="row">
								<div class="item">
									<a href="Careers-details.php">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/careers/career1.jpg" alt="">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Network Security Consultant</h3>
													<p>Fulltime, Cairo</p>
													<i></i>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a href="Careers-details.php">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/careers/career1.jpg" alt="">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Penetration Tester</h3>
													<p>Fulltime, Cairo</p>
													<i></i>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a href="Careers-details.php">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/careers/career1.jpg" alt="">
											<div class="overlay">
												<div class="overlay-content">
													<h3>GRC Consultant</h3>
													<p>Fulltime, Cairo</p>
													<i></i>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a href="Careers-details.php">
										<div class="img-container">
											<img class="img-fluid" src="assets/images/careers/career1.jpg" alt="">
											<div class="overlay">
												<div class="overlay-content">
													<h3>Information Security Consultant (Technical Presales)</h3>
													<p>Fulltime, Cairo</p>
													<i></i>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- /.Content Portfolio -->
					</div>
				</div>
			</div>
            <!-- /.Section Careers -->
            <div id="section-subscribe1">
                <div class="container">
                    <div class="row">
                        <div class="title1 col-12">
                            <h2><span>Stay connected to our</span> Newsletters</h2>
                            <i class="flaticon-download"></i>
                        </div>
                        <div class="content col-12">
                            <p>Aliquam vehicula mollis urna vel dignissim. Integer tincidunt viverra est, non congue
                                lorem tempor ac. Phasellus pulvinar iaculis.</p>
                        </div>
                        <div class="subscribe col-12">
                            <form action="#" id="SubscribeForm">
                                <input type="email" name="yourEmail" placeholder="Email Address" required="">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Footer -->
            <?php include('footer.php'); ?>
            <!-- /.Section Footer -->
        </div>
    </div>

    <!-- Javascript Files -->
    <script src="assets/js/jquery2.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- SLY Carousel -->
    <script src="assets/js/sly.min.js"></script>
    <script src="assets/js/sly.vendor.min.js"></script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Easy Waypoint -->
    <script src="assets/js/easy-waypoint-animate.js"></script>
    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>
    <!--Google Maps Init -->
    <script>
        function initMap() {

            var location = new google.maps.LatLng(-33.9280697, 151.1302219);

            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: location,
                zoom: 14,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                rotateControl: false,
                scrollwheel: false,
                fullscreenControl: false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            // var marker = new google.maps.Marker({
            //     position: location,
            //     map: map,
            //     icon: 'assets/images/marker.png'
            // });

        }

        google.maps.event.addDomListener(window, 'load', initMap);

    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDO9a4QLB3Mw5L995FcMxObb9QYVzqyRU&callback=initMap"></script>

</body>

</html>