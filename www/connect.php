<?php 
if(!isset($_SESSION))
{
	session_start();
}
include 'variables.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);

//$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$mysqli) {
	die("Connection failed: " . mysqli_connect_error());
}
?>