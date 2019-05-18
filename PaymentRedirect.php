<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Payment Response </title>

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
	
	<style>
	</style>
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
						
							
								
							<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once ( 'src/config.php');
require_once ( 'src/Instamojo.php');

$mail = new PHPMailer(true);  

$api = new Instamojo\Instamojo($private_key, $private_auth_token,$api_url);
$conn = new mysqli($host, $dbuserName, $dbpassword, $dbName);
//$conn = new mysqli($host, $dbuserNamelocal, $dbpasswordlocal, $dbNamelocal);

$payid = $_GET["payment_request_id"];
$paymentidmojo=$_GET["payment_id"];
$status= $_GET["payment_status"];
//print_r($api);
//echo($payid);
try {
	
    $response = $api->paymentRequestStatus($payid);

$name = $conn->real_escape_string($response['payments'][0]['buyer_name']);
$email = $conn->real_escape_string($response['payments'][0]['buyer_email']);
$phone = $conn->real_escape_string($response['payments'][0]['buyer_phone']);
$paymentid = $conn->real_escape_string($paymentidmojo);
$paymentrequestid = $conn->real_escape_string($payid);
$amount = $conn->real_escape_string($response['payments'][0]['amount']);
$status = $conn->real_escape_string($response['payments'][0]['status']);
	
	$sql="INSERT INTO registereddevotee (name, email, phone, transactionid, Amount, paymentrequestid, status) VALUES ('".$name."','".$email."', '".$phone."', '".$paymentid."', '".$amount."', '".$paymentrequestid."', '".$status."')";

if(!$result = $conn->query($sql)){

}
else
{
} 

	 if($status=='Failed'){
		  echo '<h1 class="font-open text-white margin-bottom-25 text-center" style="font-size: 36px; color: rgb(255, 255, 255); margin: 0px 0px 25px; font-weight: itallic; text-shadow: -2px 2px 2px #59F90A;">Sorry! Booking Failed</h1>';
		 echo '<div class="sbpro-bg-styler text-center" >
							   <div class="blodck parrot bg-layer heading-wrapper-small top-left" id="cta" style="border-style: solid; font-size: 20px;color: rgb(255, 255, 255); padding-top: 30px;min-height:100%; min-width:50%;position:relative;">';

		 
		 echo "Your Payment Request has failed. Please try again.</br>";
		 echo "If your account got deducted it will be refuded within 5-7 working days. </br> If you still do not get the refund please feel free to contact us or Instamojo.</br> ";
		 echo "Please note down your Transaction Details for future reference.";
		 echo "<p>Payment ID: " .$paymentidmojo. "</p>" ;
		 echo "<p>Payment Request ID: " .$payid. "</p></br>" ;
		 
		 echo '<a href="Register.php" class="main-btn">Retry Booking</a>';
		  echo "<br></br>";
		  echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';echo '</div>';
	echo '</div>';
	 }else{
		 
		 	 echo '<h1 class="font-open text-white margin-bottom-25 text-center" style="font-size: 36px; color: rgb(255, 255, 255); margin: 0px 0px 25px; font-weight: itallic; text-shadow: -2px 2px 2px #59F90A;">You have Successfully Registered For the Event</h1>';
			 echo '<div class="blodck parrot bg-layer heading-wrapper-small top-left" id="cta" style="border-style: solid; font-size: 20px;color: rgb(255, 255, 255); padding-top: 30px;padding-bottom: 30px; min-height:100%; position:relative; padding-left:30px;">
								Please find your registered details below: </br></br>
								<div style="text-shadow: -2px 2px 2px #3011e0;">';
		 echo "<h>   Payment ID: " . $response['payments'][0]['payment_id'] . "</h></br>" ;
    echo '<h style="text-align=center;">   Registered Name: ' . $response['payments'][0]['buyer_name'] . '</h></br>' ;
    echo "<h>   Registered Email: " . $response['payments'][0]['buyer_email'] . "</h></br>" ;
	echo "<h>   Mobile: " . $response['payments'][0]['buyer_phone'] . "</h>" ;
	echo '</div>';
	echo '</div>';echo '</div>';
	echo '</div>';
	
	
	
 // print_r($response);

  echo "<br></br>";
   
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'evolvetoexcelteam@gmail.com';                 // SMTP username
    $mail->Password = 'Harekrishna108';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@evolvetoexcel.com', 'EvolveToExcel');
   $mail->addAddress($email, $name);     // Add a recipient
 // $mail->addAddress("arpitneema25@gmail.com", "arpit");     // Add a recipient
  
 // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@evolvetoexcel.com', 'EvolveToExcel');
    //$mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome Onboard';
	$message = "You have succesfully registered for the event: 'Mindful and conscious living'. Please find the details below:";
	            $message .= "<h1>Payment Details</h1>";
    
	
			
                $message .= "<hr>";
                $message .= '<p><b>ID:</b> '.$paymentid.'</p>';
                $message .= '<p><b>Amount:</b> '.$amount.'</p>';
                $message .= "<hr>";
                $message .= '<p><b>Name:</b> '.$name.'</p>';
                $message .= '<p><b>Email:</b> '.$email.'</p>';
                $message .= '<p><b>Phone:</b> '.$phone.'</p>';
				
				$message .= "<h1>Event Details</h1>";
    
                $message .= "<hr>";
                $message .= "<p><b>Date: 16th June 2019</b>";
                $message .= "<p><b>Time: 6:00 PM </b>";
                $message .= "<hr>";
                $message .= '<p><b>Venue: Hotel Swasno, J-10/7 DLF Phase 2
Opposite Sahara Mall, Gurgaon,</b> </p>';
    $mail->Body    = $message;
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if( $mail->send()){
	   
   };
   
	 }

  
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>       
				</div>
			</div>
		</div>
		
		<!-- /Footer -->
<section class="cid-qTkAaeaxX5" id="footer1-2">

		<div class="container" style="text-align: center;">
			<div class="media-container-row content text-white" style="text-align: center;">
				<div class="col-12 col-md-3" style="text-align: center;">
					<div class="media-wrap" style="text-align: center;">
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
				<div class="col-22 col-md-9 mbr-fonts-dstyle disdplay-7" style="text-align: center;">
					<h5 class="pb-3"></h5>
					<p class="mbr-text"></p>
					</span> <span class="navbar-caption-wrap"><a
						class="navbar-caption text-primary display-5"
						style="position: absolute; top: 5px; text-align: right; font-size: 35px;font-style: italic;font-style: italic;"
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
		$('.btn').on('click', function() {
			if(ValidateEmail()){
				console.log('inside');
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
  }
});
function ValidateEmail(inputText)
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
