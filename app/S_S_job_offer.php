<!-- Have to apply PHP part -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Home</title>
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
			<!-- Changes will apply here -->
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="5em" color="#F78541">
					
				<b/>Active Offers
				</font></legend>
				<br><br>
				<ul>
						<li type="square">
						<a href="S_A_job_offer.html"><font color="teal" size="4em" />Active Offers</a>
					</li>
					<hr>
					
					<li type="square"><a href="profile.php"><font color="teal" size="4em" />Sent Offers</a></li><hr>
					<br><br><br><br><br><br><br><br><br><br>
					
				</ul>
			</fieldset>
			</td>
			<td >
				<table>
					
						<td>
							<fieldset>
								
								<table>
									<tr>
										<td width="800" height="200"   >
											<font color="teal" size="4em" />Sent Offers: <a href="loggedin.php"></a></br></br><!-- Changes will apply here -->
											<hr>
											<button onclick="document.location.href='../php/editProfile.php'">Cancel request</button><!-- Changes will apply here -->
											<button onclick="document.location.href='../php/editProfile.php'">Hide</button><!-- Changes will apply here -->
										</td>
										
									</tr>
									
									
								</table>
							</fieldset>
						</td>
					
				</table>
			</td>
			
		</tr>
		<tr align="right">
				<td colspan="2">
					<h5 align="center">
						<font color="white">
							<input type="search" id="mySearch" name="mysearch">
    						<button>Search</button>
    					</font>
					</h5>
				</td>
			</tr>
	</table>
</body>
</html>