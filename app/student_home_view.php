
<?php session_start()?>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
            $person['name']=$_POST['name'];
            $person['username']=$_POST['username'];
            
        }

?>
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STUDENT Home </title>
</head>
<body>
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
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
			
			<td valign="top" height="350"  align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							
						</h2>
					</legend>


								<table>
								<tr><td  style="text-align:center">Hello<h4 align="center">LOGGED IN as |<a href="../app/student_profile_view.php"><font color="white"><?php echo $_SESSION['username'] ?></font></a><h4></td></tr>
									<tr>
										<td width="100%">
											
											
											<table>
											
											
											<tr><td width="100%">
											
											
											<hr>
											</td></tr>
											
											
											</table>
											
											<!--name-->
											<tr>
											<td style="text-align:center">
											<br>
											<span><font style="font-family:'Courier New'"color="white" size="6em" />Welcome to the Campus Recruitment System</span>
											
											<hr width="300" align="center" size="1">
											
											
											</td>
																
											
											</tr>
											
											
										<!--what we do-->
											
											
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



