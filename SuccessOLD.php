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
 <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
	<!-- Bootstrap --><link rel="stylesheet" href="assets/tether/tether.min.css">
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
<body style="margin:0; padding:0;  height:100%;">

	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
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
					<li class="snip1217"><a href="index.html" onclick="onclickofli()">Home</a></li>
					<li class="snip1217"><a href="index.html#about" onclick="onclickofli()">About</a></li>
					<li class="snip1217"><a href="index.html#highlights" onclick="onclickofli()">Highlights</a></li>
					<li class="snip1217"><a href="index.html#speaker" onclick="onclickofli()">Speaker</a></li>
					<li class="snip1217"><a href="Register.php" onclick="onclickofli()">Register</a></li>
					<li class="snip1217"><a href="index.html#contact" onclick="onclickofli()">Contact</a></li>
					
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->
		<div class="blodck parrot bg-layer heading-wrapper-small top-left" id="cta" style="background-image: url(&quot;images/uploads/1/5b16cc67029fc_placeholder4.jpeg&quot;); background-color: rgba(0, 0, 0, 0); padding-top: 80px;min-height:100%; position:relative;">
			<div class="overly" style="background-color: rgba(0, 0, 0, 0.6);">
			</div>
			<div class="container" style="min-height:100%; position:relative;">
				<div class="row row-vertical-center" id="fPfqc">
					<div class="col-md-12">
						<div class="sbpro-bg-styler cta3 xs-margin-bottom-20">
							<h1 class="font-open text-white margin-bottom-25 text-center" style="font-size: 36px; color: rgb(255, 255, 255); margin: 0px 0px 25px; font-weight: itallic; text-shadow: -2px 2px 2px #59F90A;">You have Successfully Registered </h1>
							<p class="font-open text-white-smoke margin-bottom-25 text-center" style="font-size: 16px; color: rgb(249, 249, 249); margin: 0px 0px 25px;"><?php 
require_once ( 'src/config.php');
require_once ( 'src/Instamojo.php');

$api = new Instamojo\Instamojo($private_key, $private_auth_token,$api_url);
$payid = $_GET["payment_request_id"];
//print_r($api);
//echo($payid);
try {
	
    $response = $api->paymentRequestStatus($payid);
echo "<h>Payment ID: " . $response['payments'][0]['payment_id'] . "</h></br>" ;
    echo "<h>Registered Name: " . $response['payments'][0]['buyer_name'] . "</h></br>" ;
    echo "<h>Registered Email: " . $response['payments'][0]['buyer_email'] . "</h>" ;
 // print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?></p>
							 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer -->
<section class="cid-qTkAaeaxX5" id="footer1-2" style="position:absolute; bottom:0;width:100%;">

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
			<!-- <div class="col-12 col-md-3 mbr-fonts-style display-7">
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
				</div>-->
				<div class="col-22 col-md-3 mbr-fonts-style display-7">
					<h5 class="pb-3"></h5>
					<p class="mbr-text"></p>
					</span> <span class="navbar-caption-wrap"><a
						class="navbar-caption text-primary display-5"
						style="position: absolute; top: 5px; text-align: right; font-size: 35px;font-style: italic;"
						href="index.html">EVOLVE</a><a
						class="navbar-caption text-primary display-5"
						style="position: relative; text-align: right;; top: 30px; font-size: 10px">Spreading
							the art of excelling</a></span>
					
				</div>
			</div>
		
		</div>
	</section>
	
	<!-- /Footer -->
<script>
function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
};
function onclickofli(){
eventFire(document.getElementsByClassName('navbar-toggle')[0], 'click');
};
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
};
</script>
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
