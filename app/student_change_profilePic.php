

<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Profile Picture</title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">
<nav align="right">
							<button type="button" onclick="location.href='../app/student_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='../app/student_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='../app/Student_searchJobOffers_view.php'"><font color="red" size="4em" /><b/>Job Offers</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='../app/homepage.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
					
					</nav>
			</td>
		</tr>
		<tr>
			<!-- Changes will apply here -->
<!--<tr align="left" >
			<td></td>
			<td colspan="2">
				<nav>
					<button type="button" onclick="location.href='S_home.html'">Home</button>
					<button type="button" onclick="location.href='S_profile.html'">Profile</button>
					<button type="button" onclick="location.href='S_job_offer.html'">Job Offers</button>
					<button type="button" onclick="location.href='login.html'">Log Out</button>
					
				</nav>
			</td>
		</tr>-->
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>Edit Profile</span>
				</font></legend>
				<br><br>
				
				   <ul>
				    <span><a href="student_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />Edit Profile </a></span>
					<hr width="150" align="left" size="5">
					<span><a href="student_security_view.php"style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
					<hr width="150" align="left" size="5">
					
					<span><a href="homepage.php"style="text-decoration:none"><font color="teal" size="5em" />Delete account</a></span>
					<hr width="150" align="left" size="5">
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
							EDIT PROFILE
						</h2>
					</legend>


								<table>
									<tr>
										<td width="500">
											
											
											
											
												
											
									
											



											
											
											
										<table >
									<tr>
										<td align="center">
											<img src="img/facebook.jpg" alt="" width="220">
											<br><br>
											<input type="file">
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<hr>
											<input value="Upload" type="submit">
										</td>
									</tr>
								</table>
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
							<!--<input type="search" id="mySearch" name="mysearch">
    						<button>Search</button>
    					-->
						</font>
					</h5>
				</td>
			</tr>
	</table>
</body>
