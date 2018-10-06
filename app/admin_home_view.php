<?php include "../service/person_service.php"; ?>

<?php session_start() ?>



<?php

$org=$_SESSION['username'];




  
  $organizations = getAdminsByUsername($org);

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
	<title>Admin Home</title>
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
			<!-- Changes will apply here -->
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="5em" color="#F78541">
					
				<b/>Profile
				</font></legend>
				<br><br>
				<ul>
					<hr>
					<img src="img/hijab.png" width="250" height="250">
					<hr>
					<h2><font color="teal" size="4em"/>Head Developer</h2>
					<hr>
					<font color="white">Expert In:<br><br><br> 

							<button><font color="red" size="3em"/>HTML</button><br><br>
							<button><font color="#468A78" size="3em"/>C/C++</button><br><br>
							<button><font color="#FFC300  " size="3em"/>JAVASCRIPT</button><br><br>
							<button><font color="#FF5733  " size="3em"/>AJAX</button><br><br>
							<button><font color="#900C3F" size="3em"/>PHP</button>
					<hr>

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
											<font color="white" size="4em"/>Welcome to the
											<font color="yellow" size="4em"/>CAMPUS 
											<font color="red" size="4em"/>RECRUITMENT 
											<font color="teal" size="4em"/>SYSTEM
										<h4 align="right">LOGGED IN as |<a href="../app/A_profile.php"><font color="white"><?php echo $_SESSION['username'] ?></font></a><h4>

										<br><br><br>

										
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
											<img src="img/admin.jpg" width="250" height="250">
													<br><br><br>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp
												<button type="button" onclick="location.href='A_viewadmin.php'"><font color="#C70039" size="4em"><b/>ADMIN PANEL</font></button>
													<br><br><br><br><br><br><br><br><br><br><br><br>
													<br><br><br><br><br><br><br><br><br><br><br><br>
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
