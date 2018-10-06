
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Info</title>
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
					
				<b/> Student PROFILE
				</font></legend>
				<br><br>
				<ul>
					
					
					<li type="square"><a href="A_viewStudent.php"><font color="teal" size="4em" /> View Student</a></li><hr>
					<li type="square"><a href="A_view_org.php"><font color="teal" size="4em" /> View Organization</a></li><hr>
					

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
							Shamim
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											<font color="white" size="4em">Welcome to the 
									<font color="yellow" size="4em"/>CAMPUS 
									<font color="red" size="4em"/>RECRUITMENT 
									<font color="teal" size="4em"/>SYSTEM
										<a href="loggedin.php"><?php echo $_SESSION['username'] ?></a></font>
										<br><br><br>
									<font color="white">
										<h1>
											<font color="red">CLICK</font> view 
											<font color="yellow">TYPE</font> to see 
											<font color="teal">USER</font> Informations
										</h1>
										<a href="loggedin.php"><?php echo $_SESSION['username'] ?></a></font>
										<br><br><br>
									<font color="white">Expert In: 
										<a href="loggedin.php"><?php echo $_SESSION['username'] ?></a></font>
										<button><font color="red" size="3em"/>HTML</button>
											<button><font color="#468A78" size="3em"/>C/C++</button>
											<button><font color="#FFC300  " size="3em"/>JAVASCRIPT</button>
											<button><font color="#FF5733  " size="3em"/>AJAX</button>
											<button><font color="#900C3F" size="3em"/>PHP</button>
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
