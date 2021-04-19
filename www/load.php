<?php
if(!isset($_SESSION))
{ 
	session_start();
}
include 'connect.php';

$asså = $_POST['asså'];
$userid = $_SESSION['userid'];
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO meddelanden (msg, date, userid) VALUES ('$asså', '$date' , '$userid')";
if (mysqli_query($mysqli, $sql)) {
	echo "Message successfully sent!";
	header("Location: index.php");
} else {
	echo "Error: " . $sql . mysqli_error($mysqli);
}
?>