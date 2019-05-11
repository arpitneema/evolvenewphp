<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once ( 'src/config.php');

$mail = new PHPMailer(true);  
$data = $_POST;
 $mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
//for production
$mac_calculated = hash_hmac("sha1", implode("|", $data), "71fc4518a3884d3cb561ab8c952294f7");
//for test
//$mac_calculated = hash_hmac("sha1", implode("|", $data), "3b08558e3e324710a31369e5fbd3c848");

//$myfile = fopen("newfile.txt", "w");
//$txt = "John Dosdfsdfe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $mac_provided);
//fwrite($myfile, $mac_calculated);

//fclose($myfile);
//if($mac_provided == $mac_calculated){ 
    echo "MAC is fine";
  
				
				
try {
$conn = new mysqli($host, $dbuserName, $dbpassword, $dbName);
$name = $conn->real_escape_string($data['buyer_name']);
$email = $conn->real_escape_string($data['buyer']);
$phone = $conn->real_escape_string($data['buyer_phone']);
$paymentid = $conn->real_escape_string($data['payment_id']);
$paymentrequestid = $conn->real_escape_string($data['payment_request_id']);
$amount = $conn->real_escape_string($data['amount']);
$status = $conn->real_escape_string($data['status']);

if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO registereddevotee (name, email, phone, transactionid, Amount, paymentrequestid, status) VALUES ('".$name."','".$email."', '".$phone."', '".$paymentid."', '".$amount."', '".$paymentrequestid."', '".$status."')";
$myfile = fopen("newfile1.txt", "w");
$txt = "John govind";
fwrite($myfile, $txt);
fwrite($myfile, $sql);
fwrite($myfile, $data);

if(!$result = $conn->query($sql)){
//die('There was an error running the query [' . $conn->error . ']');
fwrite($myfile, $txt);
}
else
{
}

	
}
catch (Exception $e) {
$exceptin="exception";
	fwrite($myfile, $exceptin);
//    print('Error: ' . $e->getMessage());
}    
fclose($myfile);
try {
$name = $conn->real_escape_string($data['buyer_name']);
$email = $conn->real_escape_string($data['buyer']);
$phone = $conn->real_escape_string($data['buyer_phone']);
$paymentid = $conn->real_escape_string($data['payment_id']);
$paymentrequestid = $conn->real_escape_string($data['payment_request_id']);
$amount = $conn->real_escape_string($data['amount']);
$status = $conn->real_escape_string($data['status']);
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
  // $mail->addAddress($email, $name);     // Add a recipient
  $mail->addAddress("arpitneema25@gmail.com", "arpit");     // Add a recipient
  
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
	$message = "You have succesfully registered for the event: 'Quest for Infinity'. Please find the details below:";
	            $message .= "<h1>Payment Details</h1>";
    
                $message .= "<hr>";
                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
                $message .= "<hr>";
                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
                $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
                $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
				
				$message .= "<h1>Event Details</h1>";
    
                $message .= "<hr>";
                $message .= "<p><b>Date: 16th Feb 2018</b>";
                $message .= "<p><b>Time: 5:30 PM </b>";
                $message .= "<hr>";
                $message .= '<p><b>Venue: Hotel Swasno, J-10/7 DLF Phase 2
Opposite Sahara Mall, Gurgaon,</b> </p>';
    $mail->Body    = $message;
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

if($data['status'] == "Credit"){ 
    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
//}
//else{
  //echo "Invalid MAC passed";
//}


?>