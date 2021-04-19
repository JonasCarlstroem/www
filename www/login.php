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
	<script src="jquery-2.2.0.min.js">
	</script>
	
	<script>
		
	</script>

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
		?>	  <table name="" style="margin-top:-8px;">
			  <tr>
			  <td><a href="index.php"><img src="images/menubar/Home_Idle.png" OnMouseOver="this.src='images/menubar/Home_Hoover.png'" OnMouseOut="this.src='images/menubar/Home_Idle.png'" /></a></td>
			  <td><a href="register.php"><img src="images/menubar/Register_Idle.png" OnMouseOver="this.src='images/menubar/Register_Hoover.png'" OnMouseOut="this.src='images/menubar/Register_Idle.png'" /></a></td>
			  <td><a href="login.php"><img src="images/menubar/Log_in_Active.png" /></a></td>
			  </tr>
			  </table><?php
		} else {
		?>	  <table>
			  <tr>
			  <td><a href="index.php">r00t</a></td>
			  <td><a href="index.php">l33t</a></td>
			  <td><a href="profile.php&id=' . $_SESSION['userid'] . '">' . $_SESSION['user'] . '</a></td>
			  <td><a href="logout.php"><img src="images/menubar/Logout_Idle.png" OnMouseOver="this.src='images/menubar/Logout_Hover.png'" OnMouseOut="this.src='images/menubar/Logga_ut_Idle.png'" /></a></td>
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
					<?php 
						if(!isset($_SESSION['user']))
						{
					?>
						<form action="validate.php" method="POST">
							<table>
								<tr>
									<!--<td>Username: </td>-->
									<td><input type="text" name="username" value="Username" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);" /></td>
								</tr>
								<tr>
									<!--<td>Password: </td>-->
									<td><input type="password" name="passwrd" value="Password" id="regbar" OnFocus="active(this);" OnBlur="deselect(this);" /></td>
								</tr>
								<tr>
									<td><input type="submit" name="submit" value="Logga in" style="width: 100px; height: 25px; border: none; background-color: black; color: white;" /></td>
								</tr>
							</table>
						</form>
						<?php
						}
						?>
					</div>
					<div id="body2">
						
					</div>
				</div>
			<div id="footer">
		</div>
		</div>
	</div>
</body>
</html>