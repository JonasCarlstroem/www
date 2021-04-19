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
	<link rel="stylesheet" type="text/css" href="css.css">
	<script src="jquery-2.2.0.min.js">
	</script>

		<title>
			tjena
		</title>
</head>
<body>
<div id="topbar">
	<center>
		<?php if(!isset($_SESSION['user'])) {
		?>	  <table style="margin-top: -8px;">
			  <tr>
			  <td><a href="index.php"><img src="images/menubar/Home_Active.png" /></a></td>
			  <td><a href="register.php"><img src="images/menubar/Register_Idle.png" OnMouseOver="this.src='images/menubar/Register_Hoover.png'" OnMouseOut="this.src='images/menubar/Register_Idle.png'" /></a></td>
			  <td><a href="login.php"><img src="images/menubar/Log_in_Idle.png" OnMouseOver="this.src='images/menubar/Log_in_Hover.png'" OnMouseOut="this.src='images/menubar/Log_in_Idle.png'" /></a></td>
			  </tr>
			  </table><?php
		} else {
		?>    <table style="margin-top: -8px;">
			  <tr>
			  <td><a href="index.php"><img src="images/menubar/Home_Active.png" /></a></td>
			  <td><a href="profile.php&id=<?php echo $_SESSION['userid']; ?>"><img src="images/menubar/Profile_Idle.png" OnMouseOver="this.src='images/menubar/Profile_Hover.png'" OnMouseOut="this.src='images/menubar/Profile_Idle.png'" /></a></td>
			  <td><a href="logout.php"><img src="images/menubar/Logout_Idle.png" OnMouseOver="this.src='images/menubar/Logout_Hover.png'" OnMouseOut="this.src='images/menubar/Logout_Idle.png'" /></a></td>
			  </tr>
			  </table> <?php
		}
		?>
	</center>
</div>	
	<div id="wrapper">
		<img src="images/Optimus_rhyme_logo.png" style="margin-left: 150px;" />
		<div id="bigcontent">
				<div id="header">
				<script>
					var images = ['telta.jpg', 'antizja.jpg'];
					$('<img style="border: 1px solid black"; class="fadeIn" src="images/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#header');
					</script>
				</div>
					<div id="divwrapper">
					<div id="body1">
						<span style="font-size: 25px;">Latest posts:</span><br />
						<div class="bodybox">
					<?php
						$result = $mysqli->query($sqlmsg);
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
									echo '<table style="color: white; border: 1px solid black; max-width: 100%; width: 100%;">
									  <tr>
									  <td>'
									  .
									  $row["username"]
									  .
									  ':</td>
									  <td>' 
									  .
									  $row["msg"]
									  .
									  '</td>
									  </tr>
									  <tr>
									  <td>'
									  .
									  $row["date"]
									  .
									  '</td>
									  </tr>
									  </table>';
							}
						}
					?>
						</div>
					</div>
					<div id="body2">
					<?php 
					if(isset($_SESSION['user'])) { ?>
						<form name="tjena" action="load.php" method="POST">
							<input name="asså" type="text" class="inputbars" />
							<input name="tryck" type="submit" style="width: 100px; height: 25px; border: none; background-color: black; color: white;" />
						</form>
					<?php } ?>
					
					</div>
					</div>
				
			<div id="footer">
		</div>
		<div style="clear: left;"> </div>
		</div>
	</div>
</body>
</html>