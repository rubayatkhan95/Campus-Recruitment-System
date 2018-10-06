
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
							PROFILE
						</h2>
					</legend>


								<table>
									<tr>
										<td width="500">
											<span><font color="white" size="3em" />Name</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbspadmin
											<br><br>
											<hr>
											<br><br>
											<span><font color="white" size="3em" />Email</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbspadmin@gmail.com
											<br><br>
											<hr>
											<h3><font color="white" size="3em">
												GENDER
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
											</font></h3>
												<form action="">
												  <input type="radio" name="gender" value="male" checked="male">
												  <font color="teal"/ >Male<br>
												  <input type="radio" name="gender" value="female"> 
												  <font color="teal"/>Female<br>
												  <input type="radio" name="gender" value="other"> 
												  <font color="teal"/>Other
												</form>
											<hr>
											<br><br>

											<span><font color="white" size="3em" />Date Of Birth  </span>&nbsp&nbsp&nbsp&nbsp&nbsp: 
											<input type="text" name="day" placeholder="Day" size="7"> /
											<input type="text" name="month" placeholder="Month" size="7"> /
											<input type="text" name="year" placeholder="Year" size="7">
											<br><br>
											<hr>
											<br><br>
											
											<span><font color="white" size="3em" />Expertise</span>
											<br><br><br>
											<form action="" method="get">
											  <input type="checkbox" name="HTML" value="HTML">
											  <font color="red" size="3em"/>HTML
											  <input type="checkbox" name="C/C++" value="C/C++">
											  <font color="#468A78" size="3em"/>C/C++
											  <input type="checkbox" name="JAVASCRIPT" value="JAVASCRIPT">
											  <font color="#FFC300  " size="3em"/>JAVASCRIPT
											  <input type="checkbox" name="AJAX" value="AJAX">
											  <font color="#FF5733  " size="3em"/>AJAX
											  <input type="checkbox" name="PHP" value="PHP">
											  <font color="#900C3F" size="3em"/>PHP
											  <br><br>
											  <input type="submit" value="Submit">
											</form>




											<br><br>
											<hr>
											
										</td>
										<td width="300" align="center" valign="top">
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<img src="img/hijab.png" width="250" height="250">
											<br>
											<a href="../app/change_profile_pic.php"><font color="teal" size="4em">Change</font></a>
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