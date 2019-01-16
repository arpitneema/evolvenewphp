<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Book Your Seat </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
 
       
	<link type="text/css" rel="stylesheet" href="animation.css" />
	
	<link type="text/css" rel="stylesheet" href="bundles/Enterprise_skeleton.css" />
<link rel="stylesheet" href="mbr-additional.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>
<body>

	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.php">
						<img class="logo-img" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

 
			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right ">
					<li class="snip1217"><a href="index.php">Home</a></li>
					<li class="snip1217"><a href="#about">About</a></li>
					<li class="snip1217"><a href="#schedule">Schedule</a></li>
					<li class="snip1217"><a href="#speakers">Speakers</a></li>
					<li class="snip1217"><a href="#sponsors">Sponsors</a></li>
					<li class="snip1217"><a href="#contact">Contact</a></li>
					<li class="snip1217"><a href="blog.html">Blog</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
		<div class="block parrot bg-layer heading-wrapper-small top-left" id="cta3" style="background-image: url(&quot;images/uploads/1/5b16cc67029fc_placeholder4.jpeg&quot;); background-color: rgba(0, 0, 0, 0); padding-top: 80px; padding-bottom: 80px;">
			<div class="overly" style="background-color: rgba(0, 0, 0, 0.6);">
			</div>
			<div class="container">
				<div class="row row-vertical-center" id="fPfqc">
					<div class="col-md-12">
						<div class="sbpro-bg-styler cta3 xs-margin-bottom-20">
							<h1 class="font-open text-white margin-bottom-25 text-center" style="font-size: 36px; color: rgb(255, 255, 255); margin: 0px 0px 25px;">You have Successfully Registered </h1>
							<p class="font-open text-white-smoke margin-bottom-25 text-center" style="font-size: 16px; color: rgb(249, 249, 249); margin: 0px 0px 25px;"><?php 
require_once ( 'src/config.php');
require_once ( 'src/Instamojo.php');

$api = new Instamojo\Instamojo($private_key, $private_auth_token,$api_url);
$payid = $_GET["payment_request_id"];
//print_r($api);
//echo($payid);
try {
	
    $response = $api->paymentRequestStatus($payid);
echo "<h4 >Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<div >Registered Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<div>Registered Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
 // print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?></p>
							 <a href="#" class="btn btn-parrot2 btn-success" style="margin-top: 0px; margin-bottom: 0px;">CTA BUTTON</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer -->
<section class="cid-qTkAaeaxX5" id="footer1-2">

		<div class="container">
			<div class="media-container-row content text-white">
				<div class="col-12 col-md-3">
					<div class="media-wrap">
						<a href="index.html"> <img
							src="evolve-logo-2-192x192.jpg" alt="Mobirise"
							title="">
						</a>
					</div>
				</div>
				<div class="col-12 col-md-3 mbr-fonts-style display-7">
					<h5 class="pb-3" style="font-size: 20px">Address</h5>
					<p class="mbr-text" style="font-size: 20px">L-9/14, L-9, DLF Phase 2, Sector 25,
						Gurugram, Haryana 122022</p>
				</div>
				<div class="col-12 col-md-3 mbr-fonts-style display-7">
					<h5 class="pb-3" style="font-size: 20px">Get in Touch</h5>
					<p class="mbr-text" style="font-size: 20px">
					evolvetoexcelteam@gmail.com Phone:9620688619 &nbsp;
					<br>WhatsApp: 8298991710&nbsp;
						
					</p>
				</div>
				<div class="col-12 col-md-3 mbr-fonts-style display-7">
					<h5 class="pb-3"></h5>
					<p class="mbr-text"></p>
					</span> <span class="navbar-caption-wrap"><a
						class="navbar-caption text-primary display-5"
						style="position: absolute; top: 5px; font-size: 35px;font-style: italic;"
						href="http://evolvetoexcel.com">EVOLVE</a><a
						class="navbar-caption text-primary display-5"
						style="position: relative; left: 0px; top: 30px; font-size: 10px">Spreading
							the art of excelling</a></span>
					
				</div>
			</div>
			<div class="footer-lower">
				<div class="media-container-row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
				<div class="media-container-row mbr-white">
					<div class="col-sm-6 copyright">
						<p class="mbr-text mbr-fonts-style display-7" style="color:white; font-size:20px">© Copyright 2019
							EVOLVE - All Rights Reserved</p>
					</div>
					<div class="col-md-6">
						<div class="social-list align-right">
							<div class="soc-item">
								
							</div>
							
							
							<div class="soc-item">
								<a
									href="https://www.facebook.com/Evolvetoexcel-190103515235838"
									target="_blank"> <span
									class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
								</a>
							</div>
							<div class="soc-item">
								<a
									href="https://www.youtube.com/channel/UCep-R0JgFvdFaENIqdtvyrw"
									target="_blank"> <span
									class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
								</a>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
