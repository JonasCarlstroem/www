<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include_once 'connect.php';
include 'variables.php';
?>
<html>
	<head>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js'></script>
		<script src="jquery-2.2.0.min.js">
		</script>
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>
		tjena
		</title>
		<script>
			function active(x)	{
				if(x.value == x.defaultValue)	{
					x.style.color="#6aff05";
					x.style.fontStyle="normal";
					x.value="";
				}
			}
			function deselect(x) {
				if(x.value < 1)	{
					x.style.color="grey";
					x.style.fontStyle="italic";
					x.value = x.defaultValue;
				}
			}
			
			
		</script>
	</head>
	<body>
	<div id="topbar"> 
		<center>
		<?php if(!isset($_SESSION['user'])) {
			?><table style="margin-top:-8px;">
			  <tr>
			  <td><a href="index.php"><img src="images/menubar/Home_Idle.png" OnMouseOver="this.src='images/menubar/Home_Hoover.png'" OnMouseOut="this.src='images/menubar/Home_Idle.png'"  /></a></td>
			  <td><a href="register.php"><img src="images/menubar/Register_Active.png" /></a></td>
			  <td><a href="login.php"><img src="images/menubar/Log_in_Idle.png" name="login" OnMouseOver="this.src='images/menubar/Log_in_Hover.png'" OnMouseOut="this.src='images/menubar/Log_in_Idle.png'"  /></a></td>
			  </tr>
			  </table> <?php
		}
		?>
	</center>
	</div>
		<div id="wrapper">
			<img src="images/Optimus_rhyme_logo.png" style="margin-left: 150px;" />
			<div id="bigcontent">
				<div id="divwrapper">
					<div id="body1">
						<form action="createusr.php" method="POST" name="register">
							<table style="color: black; font-size: 20px;">
								<tr>
									<!--<td>Användarnamn: </td>-->
									<td><input type="text" name="usrname" value="Username" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);" /></td>
								</tr>
								<tr>
									<!--<td>Lösenord: </td>-->
									<td><input type="password" name="passwrd" value="Password" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);"  /></td>
								</tr>
								<tr>
									<!--<td>Verifiera Lösenord: </td>-->
									<td><input type="password" name="verpasswrd" value="Password" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);"  /></td>
								</tr>
								<tr>
									<!--<td>Förnamn: </td>-->
									<td><input type="text" name="firstname" value="Firstname" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);"  /></td>
								</tr>
								<tr>
									<!--<td>Efternamn: </td>-->
									<td><input type="text" name="surname" Value="Surname" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);"  /></td>
								</tr>
								<tr>
									<!--<td>Email: </td>-->
									<td><input type="text" name="email" value="Email" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);"  /></td>
								</tr>
								<tr>
									<td><input type="submit" value="Done" style="width: 100px; height: 25px; border: none; background-color: black; color: white;" /></td>
								</tr>
							</table>
						</form>
						<?php 
							if(isset($_SESSION['successful_usr'])) {
								echo "<span style='font-size: 30px; color: green;'>" . $_SESSION['successful_usr'] . "</span>";
								unset($_SESSION['successful_usr']);
							}
							elseif(isset($_SESSION['invpasswrd'])) {
								echo "<span style='font-size: 30px; color: green;'>" . $_SESSION['invpasswrd'] . "</span>";
								unset ($_SESSION['invpasswrd']);
							}
						?>
					</div>
					<div id="body2">
					<div style="clear:left;"> </div>
				</div>
			</div>
			<div id="footer">
			</div>
			</div>
		</div>
	
	</body>
</html>