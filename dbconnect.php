<?php
include 'src/config.php';
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['phone']);
$age = $conn->real_escape_string($_POST['age']);

$sql="INSERT INTO devotee (name, email, phone, age) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}

echo "Connected successfully";
?>