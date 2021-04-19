<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include 'connect.php';
include 'variables.php';
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>
		tjena
		</title>
	</head>
	<body>
	<div class="backgroundwrapper"> </div>
		<div id="wrapper">
			<div id="menu">
				<a href="index.php">r00t</a>
				<a href="#">l33t</a>
				<a href="register.php">Registrera</a>
				<a href="login.php">Logga in</a>
			</div>
			<div id="header">
				<img src="images/telta.jpg" />
			</div>
			<div class="divwrapper">
				<div class="body1">
					
				</div>
				<div class="body2">
					
				</div>
			</div>
			<div id="footer">
			</div>
		</div>
	
	</body>
</html>