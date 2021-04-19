<?php
if(!isset($_SESSION))
{
	session_start();
}
include 'connect.php';
include 'variables.php';

if($_POST['passwrd'] == $_POST['verpasswrd'])
{

	$username = $_POST['usrname'];
	$passwrd = md5($_POST['passwrd']);
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];

	$sql = "INSERT INTO userbase (firstname, surname, username, password, email) VALUES ('$firstname', '$surname', '$username', '$passwrd', '$email')";

	if($connect = mysqli_query($mysqli, $sql)) {
		$_SESSION['successful_usr'] = 'Användare skapad';
		Header('Location: register.php');
	} else {
		echo 'Unable to create user: ' . mysqli_error();
	}
} else {
	$_SESSION['invpasswrd'] = 'Lösenorden du angav stämde ej överrens.';
	header('Location: register.php');
}


?>