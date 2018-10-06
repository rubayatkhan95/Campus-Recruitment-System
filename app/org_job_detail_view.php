
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Job Details</title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">

						<button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='org_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='org_whoWeAre_view.php'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.php'"><font color="red" size="4em" /><b/>Log Out</button>
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
					
				<b/><span>Post A Job</span>
				</font></legend>
				<br><br>
				<ul>
				    <span><a href="../app/org_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />Edit Profile</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_postAJob_view.php" style="text-decoration:none"><font color="teal" size="5em" />Post A Job</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_searchEmployee_view.php" style="text-decoration:none"><font color="teal" size="5em" />Search Employee</a></span>
					<hr width="150" align="left" size="5">
					
					<span><a href="../app/homepage.php" style="text-decoration:none"><font color="teal" size="5em" />Delete account</a></span>
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
							Job Detail
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											
											<table>
											
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Title :</span></td>
											<td style="text-align:left; padding:6px">software eng.
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Nature :</span></td>
											<td style="text-align:left; padding:6px">Full time
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Education :</span></td>
											<td style="text-align:left; padding:6px">Bsc in CSE
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Requirments :</span></td>
											<td style="text-align:left; padding:6px">PHP frameworks
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Salary :</span></td>
											<td style="text-align:left; padding:6px">negoitable
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Location :</span></td>
											<td style="text-align:left; padding:6px">Banani,Dhaka
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Benifits :</span></td>
											<td style="text-align:left; padding:6px">Friendly Environment
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Send Your CV here :</span></td>
											<td style="text-align:left; padding:6px">career.build@gmail.com
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px"></td>
											<td style="text-align:left; padding:6px">

												
											<button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Send Request</button>
											<button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Cancel</button>
											
											</td>
											</tr>
											
											</table>
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
</html>








