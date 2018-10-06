
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit student  Profile</title>
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
			
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>Edit Profile</span>
				</font></legend>
				<br><br>
				<ul>
				     <span><a href="../app/student_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />Update Profile</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/S_security_view.php"style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
					<hr width="150" align="left" size="5">
					
					
					<span><a href="../app/homepage.php"style="text-decoration:none"><font color="teal" size="5em" />Delete account</a></span>
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
							Security
						</h2>
					</legend>


								<table>
									
									<tr>
										<td width="800">
											
											
											<table>
											
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Current Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30"type="password" name="firstname" value="Company Name"></td>
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />New Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30"type="password" name="firstname" value="Username.."></td>
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Confirm-New Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30"type="password" name="firstname" value="...@...com"></td>
											
											
											</tr>
											
											
											
											<tr>
											<td style="text-align:left; padding:6px"></td>
											<td style="text-align:left; padding:6px" colspan="3">
											
											<button align="right"type="button" onclick="location.href='Student_home_view.php'"><font color="red" size="4em" /><b/>Cancel</button>
											
											<button type="button" onclick="location.href='Student_home_view.php'"><font color="red" size="4em" /><b/>Submit</button>
											
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

    </table>
    </body>
</html>


	
		




