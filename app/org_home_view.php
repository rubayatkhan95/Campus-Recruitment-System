
<?php include "../service/person_service.php"; ?>

<?php session_start() ?>



<?php

$org=$_SESSION['username'];




  
  $organizations = getOrganizationsByUsername($org);

        foreach ($organizations as $org) {
          
         $a=$org["username"];


         echo "$a";
        

          }
 


?>

<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Organization Home </title>
</head>
<body>
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">

						<button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='org_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='org_whoWeAre_view.php'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
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
			
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							
						</h2>
					</legend>


								<table>
								<tr><td style="text-align:center">Welcome Shamim,Enamul</td></tr>
									<tr>
										<td width="100%">
											
											
											<table>
											
											
											<tr><td width="100%">
											
											<img src="img/company.png" alt="User Image" style="width:100%;height:350px;">
											<hr>
											</td></tr>
											
											
											</table>
											
											<!--name-->
											<tr>
											<td style="text-align:center">
											<br>
											<span><font style="font-family:'Courier New'"color="white" size="8em" />Code Log </span>
											
											<hr width="300" align="center" size="1">
											
											
											</td>
																
											
											</tr>
											
											
										<!--what we do-->
											
											<tr>
											<td style="text-align:center">
											<br>
											<span><font style="font-family:'Courier New'"color="white" size="5em" />
											
											
											
											<p>We Provide outsource<br>
											<font style="font-family:'Courier New'"color="white" size="6em" /><strong>IT SERVICES</strong><br>
											for small and mid-sized business
											</p> </span>
											
											<hr width="300" align="center" size="1">
											
											
											</td>
																
											
											</tr>
											
											</table>
											
											
											
											
											
											
											
											
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



