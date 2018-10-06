
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Profile</title>
</head>
<body>
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" align="left" src="img/CRS.jpg" width="20%" height="20%">
				<br>

					<nav align="right">

						<button type="button" onclick="location.href='admin_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='A_profile.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='A_userinfo.php'"><font color="red" size="4em" /><b/>User Info</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
					</nav>
			</td>
		</tr>
		<tr>
			<!-- Changes will apply here -->
			
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="5em" color="#F78541">
					
				<b/>Admin PROFILE
				</font></legend>
				<br><br>
				<ul>
						<li type="square">
						<a href="A_editProfile.php"><font color="teal" size="4em" />Edit Profile</a>
					</li>
					<hr>
					<li type="square"><a href="A_changepassword.php"><font color="teal" size="4em" />Change Password</a></li><hr>
					<br><br>
					
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							Change Password
						</h2>
					</legend>


								<table>
									<tr>
										<td width="500">
										

											<span><font color="white" size="3em" />Current Password</span></td>
											<td><input size="50"type="password" name="firstname" value="Company Name"></td>
											
											</tr>
											<tr>
											<td><span><font color="white" size="3em" />New Password</span></td>
											<td><input size="50"type="password" name="firstname" value="Username.."></td>
											
											
											</tr>
											<tr>
											<td><span><font color="white" size="3em" />Confirm-New Password</span></td>
											<td><input size="50"type="password" name="firstname" value="...@...com"></td>
											
											
											</tr>
											
											
											
											<tr>
											<td></td>
											<td>
											
											<button align="right"type="button" onclick="location.href='A_profile.php'"><font color="red" size="4em" /><b/>Cancel</button>
											
											<button type="button" onclick="location.href='A_profile.php'"><font color="red" size="4em" /><b/>Submit</button>
											
										</td>
										<br>
										<td width="500" align="center" valign="top">
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<img src="img/Tamim.jpg" width="250" height="250">
											<br>
											<a href="changepp.php"><font color="teal" size="4em">Change</font></a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="right">
				<td colspan="2">
					<h5 align="center">
						<font color="white">
							<button type="button" onclick="location.href='https://www.facebook.com'"><img src="img/facebook.jpg" width="30px" height="30px"></button>
				<button type="button" onclick="location.href='https://www.linkedin.com'"><img src="img/linkedin.jpg" width="30px" height="30px"></button>
				<button type="twitter.jpg" onclick="location.href='https://twitter.com'"><img src="img/facebook.jpg" width="30px" height="30px"></button>
				<button type="button" onclick="location.href='https://www.fiverr.com'"><img src="img/fiverr.jpg" width="30px" height="30px"></button>
				<button type="button" onclick="location.href='https://github.com'"><img src="img/github.jpg" width="30px" height="30px"></button>
    					</font>
					</h5>
				</td>
			</tr>
	</table>
</body>
</html>
