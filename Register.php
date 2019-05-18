<?php
require_once ( 'src/config.php');
require_once ( 'src/Instamojo.php');
if(isset($_POST['paymentbutton'])){
$product_name = "MINDFUL AND CONSCIOUS LIVING";
      //Download from website
$api = new Instamojo\Instamojo($private_key, $private_auth_token,$api_url);
try {
$conn = new mysqli($host, $dbuserName, $dbpassword, $dbName);
//$conn = new mysqli($host, $dbuserNamelocal, $dbpasswordlocal, $dbNamelocal);
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['phone']);
$price = "200";
$testphone= "9958877819";
if(strcasecmp($yourPhone, $testphone) == 0){
$price = "9";
}
$age = $conn->real_escape_string($_POST['age']);
if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO devotee (name, email, phone, age) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$age."')";
//$sql="INSERT INTO contact_form_info (name, email, phone, age) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$age."')";
if(!$result = $conn->query($sql)){
//die('There was an error running the query [' . $conn->error . ']');
}
else
{
}
	$response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $yourName,
        "phone" => $yourPhone,
        "send_email" => false,
        "send_sms" => false,
        "email" => $yourEmail,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://evolvetoexcel.com/PaymentRedirect.php",
        "webhook" => "https://evolvetoexcel.com/webhook.php"
    ));
    $pay_url = $response['longurl'];
    header("Location: $pay_url");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
}
?>
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

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
 <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


<link rel="stylesheet" href="mbr-additional.css" />
	<link type="text/css" rel="stylesheet" href="animation.css" />
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
	<script src="waitingfor.js"></script>

<script src="jquery.js"></script>
    <script>
    $(function(){
      $("#includedContent").load("footer.php");
    });
    </script>
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
	<div class="block yummy bg-layer subscribe background-cover padding-top-100 padding-bottom-100 v-align v-single bottom-center" style="background-image: url(&quot;images/uploads/1/5b16cc5d5a2bd_placeholder2.jpeg&quot;); background-color: rgba(0, 0, 0, 0); padding-top: 100px; padding-bottom: 100px;" id="subscribe7">
			<div class="overly" style="background-color: rgba(0, 0, 0, 0);">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="sbpro-bg-styler text-center">
							<h2 class="text-center" style="font-size: 30px; color: rgb(255, 255, 255); margin: 20px 0px;"></h2>
							<p class="lead text-center" style="font-size: 19px; color: rgb(243, 243, 243); margin: 0px 0px 15px; font-style: italic;">Book Your Seat for this remarkable event </p>
							<!--
							<p class="text-center" style="font-size: 16px; color: rgb(238, 238, 238); margin: 0px 0px 15px; font-style: italic;">Please provide us your details and pay the registration fees of Rs 200 now to confirm your seat. </p>
						-->
							<form role="form" action="" method="post" name="form1" onsubmit="return validateMyForm();">
								<input type="text" name="_honey" value="" style="display:none" />

								<div class="form-group">
									<input type="text" class="form-condtrol input-lg" id="name" name="name" placeholder="Your name *" style="width:300px;"/> <span style="opacity: 1; background-size: 19px 13px; left: 538px; top: 16.5px; width: 29px; min-width: 19px; height: 20px; position: absolute; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nMTcnIGhlaWdodD0nMTInIHZpZXdCb3g9JzAgMCAxNyAxMic+IDxkZWZzPiA8cGF0aCBpZD0nYScgZD0nTTcuOTA5IDEuNDYybDIuMTIxLjg2NHMtLjY3MS4xMy0xLjIwOS4yOTRjMCAwIC40MzcuNjM0Ljc3LjkzOC4zOTEtLjE4LjY1Ny0uMjQ4LjY1Ny0uMjQ4LS44MTEgMS42NjgtMi45NzkgMi43MDMtNC41MyAyLjcwMy0uMDkzIDAtLjQ4Mi0uMDA2LS43MjcuMDE1LS40MzUuMDIxLS41ODEuMzgtLjM3NC40NzMuMzczLjIwMSAxLjE0My42NjIuOTU4IDEuMDA5QzUuMiA4LjAwMy45OTkgMTEgLjk5OSAxMWwuNjQ4Ljg4Nkw2LjEyOSA4LjYzQzguNjAyIDYuOTQ4IDEyLjAwNiA2IDE1IDZoM1Y1aC00LjAwMWMtMS4wNTggMC0yLjA0LjEyMi0yLjQ3My0uMDItLjQwMi0uMTMzLS41MDItLjY3OS0uNDU1LTEuMDM1YTcuODcgNy44NyAwIDAgMSAuMTg3LS43MjljLjAyOC0uMDk5LjA0Ni0uMDc3LjE1NS0uMDk5LjU0LS4xMTIuNzc3LS4wOTUuODIxLS4xNi4xNDYtLjI0NS4yNTQtLjk3NC4yNTQtLjk3NEw3LjU2OS4zODlzLjIwMiAxLjAxMy4zNCAxLjA3M3onLz4gPC9kZWZzPiA8dXNlIGZpbGw9JyMwMDdDOTcnIGZpbGwtcnVsZT0nZXZlbm9kZCcgdHJhbnNmb3JtPSd0cmFuc2xhdGUoLTEpJyB4bGluazpocmVmPScjYScvPiA8L3N2Zz4=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span>
								</div>
								<div class="form-group">

									<input type="input" class="form-cofntrol input-lg" id="email" name="email"   placeholder="Your email *" style="width:300px;"/> <span style="opacity: 1; background-size: 19px 13px; left: 538px; top: 74.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nMTcnIGhlaWdodD0nMTInIHZpZXdCb3g9JzAgMCAxNyAxMic+IDxkZWZzPiA8cGF0aCBpZD0nYScgZD0nTTcuOTA5IDEuNDYybDIuMTIxLjg2NHMtLjY3MS4xMy0xLjIwOS4yOTRjMCAwIC40MzcuNjM0Ljc3LjkzOC4zOTEtLjE4LjY1Ny0uMjQ4LjY1Ny0uMjQ4LS44MTEgMS42NjgtMi45NzkgMi43MDMtNC41MyAyLjcwMy0uMDkzIDAtLjQ4Mi0uMDA2LS43MjcuMDE1LS40MzUuMDIxLS41ODEuMzgtLjM3NC40NzMuMzczLjIwMSAxLjE0My42NjIuOTU4IDEuMDA5QzUuMiA4LjAwMy45OTkgMTEgLjk5OSAxMWwuNjQ4Ljg4Nkw2LjEyOSA4LjYzQzguNjAyIDYuOTQ4IDEyLjAwNiA2IDE1IDZoM1Y1aC00LjAwMWMtMS4wNTggMC0yLjA0LjEyMi0yLjQ3My0uMDItLjQwMi0uMTMzLS41MDItLjY3OS0uNDU1LTEuMDM1YTcuODcgNy44NyAwIDAgMSAuMTg3LS43MjljLjAyOC0uMDk5LjA0Ni0uMDc3LjE1NS0uMDk5LjU0LS4xMTIuNzc3LS4wOTUuODIxLS4xNi4xNDYtLjI0NS4yNTQtLjk3NC4yNTQtLjk3NEw3LjU2OS4zODlzLjIwMiAxLjAxMy4zNCAxLjA3M3onLz4gPC9kZWZzPiA8dXNlIGZpbGw9JyMwMDdDOTcnIGZpbGwtcnVsZT0nZXZlbm9kZCcgdHJhbnNmb3JtPSd0cmFuc2xhdGUoLTEpJyB4bGluazpocmVmPScjYScvPiA8L3N2Zz4=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span>
								</div>
								<div class="form-group">
									<input type="phone" class="form-contrhol input-lg"  id="phone" name="phone" placeholder="Your 10 digit Mobile No. *"  style="width:300px;"/> <span style="opacity: 1; background-size: 19px 13px; left: 538px; top: 74.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nMTcnIGhlaWdodD0nMTInIHZpZXdCb3g9JzAgMCAxNyAxMic+IDxkZWZzPiA8cGF0aCBpZD0nYScgZD0nTTcuOTA5IDEuNDYybDIuMTIxLjg2NHMtLjY3MS4xMy0xLjIwOS4yOTRjMCAwIC40MzcuNjM0Ljc3LjkzOC4zOTEtLjE4LjY1Ny0uMjQ4LjY1Ny0uMjQ4LS44MTEgMS42NjgtMi45NzkgMi43MDMtNC41MyAyLjcwMy0uMDkzIDAtLjQ4Mi0uMDA2LS43MjcuMDE1LS40MzUuMDIxLS41ODEuMzgtLjM3NC40NzMuMzczLjIwMSAxLjE0My42NjIuOTU4IDEuMDA5QzUuMiA4LjAwMy45OTkgMTEgLjk5OSAxMWwuNjQ4Ljg4Nkw2LjEyOSA4LjYzQzguNjAyIDYuOTQ4IDEyLjAwNiA2IDE1IDZoM1Y1aC00LjAwMWMtMS4wNTggMC0yLjA0LjEyMi0yLjQ3My0uMDItLjQwMi0uMTMzLS41MDItLjY3OS0uNDU1LTEuMDM1YTcuODcgNy44NyAwIDAgMSAuMTg3LS43MjljLjAyOC0uMDk5LjA0Ni0uMDc3LjE1NS0uMDk5LjU0LS4xMTIuNzc3LS4wOTUuODIxLS4xNi4xNDYtLjI0NS4yNTQtLjk3NC4yNTQtLjk3NEw3LjU2OS4zODlzLjIwMiAxLjAxMy4zNCAxLjA3M3onLz4gPC9kZWZzPiA8dXNlIGZpbGw9JyMwMDdDOTcnIGZpbGwtcnVsZT0nZXZlbm9kZCcgdHJhbnNmb3JtPSd0cmFuc2xhdGUoLTEpJyB4bGluazpocmVmPScjYScvPiA8L3N2Zz4=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span>
								</div>
								<div class="form-group">
									<input type="number" class="form-cntrol input-lg" id="age" name="age" placeholder="Age *" style="width:300px;"/> <span style="opacity: 1; background-size: 19px 13px; left: 538px; top: 74.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nMTcnIGhlaWdodD0nMTInIHZpZXdCb3g9JzAgMCAxNyAxMic+IDxkZWZzPiA8cGF0aCBpZD0nYScgZD0nTTcuOTA5IDEuNDYybDIuMTIxLjg2NHMtLjY3MS4xMy0xLjIwOS4yOTRjMCAwIC40MzcuNjM0Ljc3LjkzOC4zOTEtLjE4LjY1Ny0uMjQ4LjY1Ny0uMjQ4LS44MTEgMS42NjgtMi45NzkgMi43MDMtNC41MyAyLjcwMy0uMDkzIDAtLjQ4Mi0uMDA2LS43MjcuMDE1LS40MzUuMDIxLS41ODEuMzgtLjM3NC40NzMuMzczLjIwMSAxLjE0My42NjIuOTU4IDEuMDA5QzUuMiA4LjAwMy45OTkgMTEgLjk5OSAxMWwuNjQ4Ljg4Nkw2LjEyOSA4LjYzQzguNjAyIDYuOTQ4IDEyLjAwNiA2IDE1IDZoM1Y1aC00LjAwMWMtMS4wNTggMC0yLjA0LjEyMi0yLjQ3My0uMDItLjQwMi0uMTMzLS41MDItLjY3OS0uNDU1LTEuMDM1YTcuODcgNy44NyAwIDAgMSAuMTg3LS43MjljLjAyOC0uMDk5LjA0Ni0uMDc3LjE1NS0uMDk5LjU0LS4xMTIuNzc3LS4wOTUuODIxLS4xNi4xNDYtLjI0NS4yNTQtLjk3NC4yNTQtLjk3NEw3LjU2OS4zODlzLjIwMiAxLjAxMy4zNCAxLjA3M3onLz4gPC9kZWZzPiA8dXNlIGZpbGw9JyMwMDdDOTcnIGZpbGwtcnVsZT0nZXZlbm9kZCcgdHJhbnNmb3JtPSd0cmFuc2xhdGUoLTEpJyB4bGluazpocmVmPScjYScvPiA8L3N2Zz4=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span>
								</div>
								<div class="form-group">
									<input type="text" class="form-cntrol input-lg" id="coupan" name="coupan" placeholder="Coupan" style="width:300px;"/> <span style="opacity: 1; background-size: 19px 13px; left: 538px; top: 74.5px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nMTcnIGhlaWdodD0nMTInIHZpZXdCb3g9JzAgMCAxNyAxMic+IDxkZWZzPiA8cGF0aCBpZD0nYScgZD0nTTcuOTA5IDEuNDYybDIuMTIxLjg2NHMtLjY3MS4xMy0xLjIwOS4yOTRjMCAwIC40MzcuNjM0Ljc3LjkzOC4zOTEtLjE4LjY1Ny0uMjQ4LjY1Ny0uMjQ4LS44MTEgMS42NjgtMi45NzkgMi43MDMtNC41MyAyLjcwMy0uMDkzIDAtLjQ4Mi0uMDA2LS43MjcuMDE1LS40MzUuMDIxLS41ODEuMzgtLjM3NC40NzMuMzczLjIwMSAxLjE0My42NjIuOTU4IDEuMDA5QzUuMiA4LjAwMy45OTkgMTEgLjk5OSAxMWwuNjQ4Ljg4Nkw2LjEyOSA4LjYzQzguNjAyIDYuOTQ4IDEyLjAwNiA2IDE1IDZoM1Y1aC00LjAwMWMtMS4wNTggMC0yLjA0LjEyMi0yLjQ3My0uMDItLjQwMi0uMTMzLS41MDItLjY3OS0uNDU1LTEuMDM1YTcuODcgNy44NyAwIDAgMSAuMTg3LS43MjljLjAyOC0uMDk5LjA0Ni0uMDc3LjE1NS0uMDk5LjU0LS4xMTIuNzc3LS4wOTUuODIxLS4xNi4xNDYtLjI0NS4yNTQtLjk3NC4yNTQtLjk3NEw3LjU2OS4zODlzLjIwMiAxLjAxMy4zNCAxLjA3M3onLz4gPC9kZWZzPiA8dXNlIGZpbGw9JyMwMDdDOTcnIGZpbGwtcnVsZT0nZXZlbm9kZCcgdHJhbnNmb3JtPSd0cmFuc2xhdGUoLTEpJyB4bGluazpocmVmPScjYScvPiA8L3N2Zz4=&quot;); background-repeat: no-repeat; background-position: 0px 0px; border: none; display: inline; visibility: visible; z-index: auto;"></span>
								</div>
								<p id="responseCoupan" style="color: rgb(53, 236, 53);"></p>
								<p class="text-center" id="paymentDetails" style="font-size: 16px; color: rgb(238, 238, 238); margin: 0px 0px 15px; font-style: italic;">Please provide us your details and pay the registration fees of Rs 200 now to confirm your seat. </p>
								<button type="button" class="btn btn-primary btn-lg " data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Verifying" style="color:rgb(0,0,255)" name="verifycoupanbutton" id="verifycoupanbutton" onclick="verifyCoupan()">Verify Coupan
								</button>
								<button type="submit"  class="btn btn-primary btn-lg "  data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Redirecting to Payment Gateway"  style="color:rgb(0,0,255)" name="paymentbutton" id="paymentbutton">Make Payment
								</button>
							</form>
							<p class="small sb_open text-center" style="margin: 30px 0px 15px; font-size: 13.6px; color: rgb(238, 238, 238);">Powered by Instamojo<a href="#"> </a> </p>
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
				<!--<a href="https://www.facebook.com/Evolvetoexcel-190103515235838" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-youtube"></a>-->
				<div class="col-22 col-md-9 text-right mbr-fonts-style display-7">
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


		function validateMyForm() {
			if(ValidateEmail() && ValidateAge()){
				console.log('inside');

   waitingDialog.show('Redirecting you to Payment Gateway. Plz do not press back or refresh.');
   return true;
  }else {
	  return false;
  }
}
		//$('.btn').on('click', );
function ValidateEmail()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(document.form1.email.value.match(mailformat))
{
document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}
function ValidatePhone()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(document.form1.email.value.match(mailformat))
{
document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}
function ValidateAge()
{
if(document.form1.age.value <= 80 && document.form1.age.value >= 12 )
{
document.form1.age.focus();
return true;
}
else
{
alert("Please Enter a Valid Age between 12 to 80!");
document.form1.age.focus();
return false;
}
}

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

/**
	* here a backend call will verify and validate the coupan
	*/
	function verifyCoupan(){
		// here make an ajax call to backend

		// if coupan is valid return success and the new amount in response
		// then show below code
		{
			// $('#responseCoupan').text('Invalid coupan').css('color','red');
			// $('#paymentDetails').show();
		}
		// else if coupan is invalid return businessError
		// then below message will be shown to user
		{
			$('#responseCoupan').text('Coupan applied successfully. You have to pay only Rs. '+'"new amount" ' + 'to confirm your seat').css('color','#35ec35');
			$('#paymentDetails').css('display','none');
		}

	}
</script>


</body>

</html>
