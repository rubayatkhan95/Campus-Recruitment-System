<?php session_start() ?>

<?php
  include ("../service/person_service.php");
 ?>

<?php

$org=$_SESSION['username'];

$username="";
$id="";


  
  $organizations = getAdminsByUsername($org);

        foreach ($organizations as $org) {
          
         $username=$org["username"];
         $id=$org["id"];
          $gender=$org["gender"];
          $email=$org["email"];
          $dob=$org["dob"];
        ;
          


         
        

          }
 


?>


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
						<a href="../app/A_editProfile.php"><font color="teal" size="4em" />Edit Profile</a>
					</li>
					<hr>
					<li type="square"><a href="../app/A_changepassword.php"><font color="teal" size="4em" />Change Password</a></li><hr>
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
											<span><font color="teal" size="3em" />Name</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
											<font color="white"/><?php echo "$username";?>
											<br><br>
											<hr>
											<br><br>
											<span><font color="teal" size="3em" />Email</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
											<font color="white"/><?php echo "$email";?>
											<br><br>
											<hr>
											<h3><font color="teal" size="3em">
												GENDER
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<font color="white"/>&nbsp&nbsp&nbsp
												Male<br>
											</font></h3>
												
												  
											<hr>
											<br><br>

											<span><font color="teal" size="3em" />Date Of Birth  </span>&nbsp&nbsp&nbsp&nbsp&nbsp:
											<font color="white"/>&nbsp&nbsp&nbsp
											
											<?php echo "$dob";?>
											<br><br>
											<font color="teal" size="3em">Expert In:<br><br>
							<button><font color="red" size="3em"/>HTML</button>
							<button><font color="#468A78" size="3em"/>C/C++</button>
							<button><font color="#FFC300  " size="3em"/>JAVASCRIPT</button>
							<button><font color="#FF5733  " size="3em"/>AJAX</button>
							<button><font color="#900C3F" size="3em"/>PHP</button>
					<hr>




											<br><br>
											<hr>
											
										</td>
										<td width="300" align="center" valign="top">
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<img src="./img/hijab.png" width="250" height="250">
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