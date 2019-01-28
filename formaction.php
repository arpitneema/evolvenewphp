<?php 



require_once ( 'src/config.php');

require_once ( 'src/Instamojo.php');



$product_name = "Registration for Quest for Infinity- A one day Fest";

$price = "100";

$name = $_POST["name"];

$phone = $_POST["phone"];

$email = $_POST["email"];



      //Download from website

$api = new Instamojo\Instamojo($private_key, $private_auth_token,$api_url);

try {
$conn = new mysqli($host, $dbuserName, $dbpassword, $dbName);
//$conn = new mysqli($host, $dbuserName, $dbpassword, $dbNamelocal);
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['phone']);
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
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://evolvetoexcel.com/Success.php",
        "webhook" => "http://evolvetoexcel.com/webhook.php"
    ));
    $pay_url = $response['longurl'];
    header("Location: $pay_url");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     

?>