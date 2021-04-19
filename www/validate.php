<?php
if(!isset($_SESSION))
{
	session_start();
}
include_once 'connect.php';
include 'variables.php';

$username = $_POST['username'];
//$password = $_POST['passwrd'];
$password = md5($_POST['passwrd']);

$sql = "SELECT id, username, password FROM userbase WHERE username='$username' AND password='$password'";
if($connect = mysqli_query($mysqli, $sql))
{
	if(mysqli_num_rows($connect) > 0) {
		while($row = mysqli_fetch_assoc($connect)) {
			if(($row['username'] && $row['password']) == ($username && $password))
				{
					$_SESSION['user'] = $row['username'];
					$_SESSION['userid'] = $row['id'];
					Echo 'Successfully logged in as ' . $_SESSION['user'];
					header('Location: index.php');
				}	else {
					Echo 'User was not found.';
			}
			
		}
	}	else {
		echo "error";
	}
}











?>