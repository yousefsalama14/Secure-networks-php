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
    <title>Solution | Secure Networks</title>
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
                            <h1>Solution</h1>
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li class="current"><a href="#">Solution</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Section Breadcrumb 1 -->
            <!-- Section Solution -->
            <div class="solution-sec">
                <div class="container">
                    <div class="row">
                        <div class="left col-sm-12 col-md-6">
                            <div class="row">
                                <div class="title-hr2 col-2 col-sm-2"></div>
                                <div class="title4 col-10 col-sm-10">
                                    <h6>Solution #1</h6>
                                    <h2>SECURE IDENTITY AND ACCESS MANAGEMENT</h2>
                                </div>
                            </div>
                            <p>
                                Identity management is the discipline of helping in the effective management of the
                                user’s access rights. Through our advanced Secure Identity and Access Management
                                services, we offer our extensive expertise in integrating and architecting the
                                enterprise-oriented solutions. Secure identity and access management solutions by Secure
                                Networks allow the organizations in meeting the evolving needs around mobile devices and
                                cloud applications by enabling secure access to the different online resources. It aims
                                to protect the digital interactions of the employees of any organization along with its
                                partners as well as customers with pioneer-rating strong authentication and digital
                                signing products & services.
                            </p>
                            <p>
                                We have broad and deep technical expertise across the entire IAM space and use it to
                                tailor solutions to the customer’s specific business needs. It is unreasonable to think
                                that one solution will work for every organization and, in fact, we believe that the
                                same solution may not work for competing organizations in the same line of business.
                                Each of the IAM vendors has a unique paradigm for solving the identity problem and
                                different paradigms are better suited for certain organizations than others. SIS helps
                                organizations determine which paradigm, and subsequently products and architecture,
                                meets the needs of their organization.
                            </p>
                            <p>
                                Through strong authentication, credential management, authentication devices, security
                                clients, validation and access control, Secure Networks aims to help the organizations
                                in addressing their unique security & IT infrastructural needs.
                            </p>
                            <p>
                                The reliable and legit secure identity and access management services by Secure Networks
                                utilize strong authentication for enabling the enterprises as well as trust centers
                                towards securing access, interactions, and identities as well. Our high-end solutions
                                include cloud-based or server-based management platforms along with an advanced range of
                                innovative development tools and a wide range of authenticators.
                            </p>
                        </div>
                        <div class="right col-sm-12 col-md-6">
                            <img class="img-fluid" src="assets/images/about/about1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Section Solution -->
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