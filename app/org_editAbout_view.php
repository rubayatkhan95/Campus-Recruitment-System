
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
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
					
				<b/><span>Edit Profile</span>
				</font></legend>
				<br><br>
				<ul>
				    <span><a href="../app/org_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />General </a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_security_view.php"style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_editAbout_view.php"style="text-decoration:none"><font color="teal" size="5em" />About</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_editFaq_view.php" style="text-decoration:none"><font color="teal" size="5em" />FAQ</a></span>
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
							About
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											
											
											 <fieldset>
											 <legend><h3>select  Pictur</h3></legend>
											
											 <h3>Picture   : <input type="checkbox" name="pic" value=" " /></h3>No file choosen
											 
											 <hr>
											
											
											 <!-- <input type="submit" name="submit"/> --> 
											 </fieldset>
										    </td>
											 </tr> <!--company name-->
											<tr>
											<td width="800">
											<fieldset>
											 <legend><h3>Basic Info</h3></legend>
											
											 <span><font color="white" size="5em" />Company Name </span>
											 <input size="30"type="text" name="firstname" value="0000">
											 <hr width="150" align="left" size="1">
											 <span><font color="white" size="5em" />     
											 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Address </span>
											 <input size="30"type="text" name="firstname" value="0000">
											 <hr width="150" align="left" size="1">
											  <span><font color="white" size="5em" />     
											 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email </span>
											 <input size="30"type="text" name="firstname" value="0000">
											 <hr width="150" align="left" size="1">
											  <span><font color="white" size="5em" />     
											 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Contact </span>
											 <input size="30"type="text" name="firstname" value="0000">
											 <hr width="150" align="left" size="1">
											
											 <!-- <input type="submit" name="submit"/> --> 
											 </fieldset>
											 											</td>
											</tr><!-- company address & information   -->

											<tr>
											<td width="800">
												 <fieldset>
												  <legend><h3>Description</h3></legend>
											<textarea placeholder="type your message here.." rows="3"style="height:400px;width:800px;maxlength:4000">
											
											
											</textarea>
											</fieldset>
											</td>
											</tr>
											
											<tr>
											
											
											
											
											<td style="text-align:right; padding:6px" colspan="3">
											<hr>
											
											<button align="right"type="button" onclick="location.href='org_profile_view.html'"><font color="red" size="4em" /><b/>Cancel</button>
											
											<button type="button" onclick="location.href='org_profile_view.html'"><font color="green" size="4em" /><b/>Submit</button>
											
											</td>
											
											
											
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



