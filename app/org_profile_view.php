<?php session_start() ?>

<?php
  include ("../service/person_service.php");
 ?>

<?php

$org=$_SESSION['username'];

$username="";
$id="";


  
  $organizations = getOrganizationsByUsername($org);

        foreach ($organizations as $org) {
          
         $username=$org["username"];
         $id=$org["id"];
          $gender=$org["gender"];
          $email=$org["email"];
          $contact=$org["mobile_no"];
          $address=$org["address"];
          


         
        

          }
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Organization Profile </title>
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
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>Profile</span>
				</font></legend>
				<br><br>
				<ul>
				    <span><a href="../app/org_editProfile_view.php?id=<?= $org['id'] ?>" style="text-decoration:none"><font color="teal" size="5em" />Edit Profile</a></span>
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
							username
						</h2>
					</legend>

                               
                                
                                <span style="text-align:center"><font style="font-family:'Courier New' "color="white" size="8em" />  </span>
                                <hr width="300" align="left" size="1">
                                
                                
                                
								<table>
									<tr>
										<td width="800">
											
											
											<table>
											
											
											
											
											
											<tr>
											<td width="550">
											
											<table>
											
											
											<tr>
											
											
											</tr>
											<tr>
											<td width="200" text-align="left">
											<span><font color="white" size="5em" /><b>User Name  </b> </span>
											
											</td width="350">
                                                <td><font color="white" size="5em" /> <?php echo "$username";?></td>
                                                
											</tr>
                                                
                                            <tr>
											<td>
											<span><font color="white" size="5em" /><b>Gender  </b> </span>
											
											</td>
                                                <td><font color="white" size="5em" /><?php echo "$gender";?></td>
                                                
											</tr>   
                                                
                                                
                                            <tr>
											<td>
											<span><font color="white" size="5em" /><b>E-mail  </b> </span>
											
											</td>
                                                <td><font color="white" size="5em" /><address><?php echo "$address";?></address></td>
                                                
											</tr>    
                                                
                                             <tr>
											<td>
											<span><font color="white" size="5em" /><b>Contact  </b> </span>
											
											</td>
                                                 <td><font color="white" size="5em" /><number<?php echo "$contact";?></number></td>
                                                
											</tr>    
                                            <tr>
											<td>
											
											
											</td>
                                                 
                                                
											</tr>    
                                                
											
											
											
                                                
                                          
                                                
                                                
											
											<tr>
											<td style="text-align:left; padding:6px" >
											<span><font color="white" size="5em" /><b>Skills </b> 
											
											
											
											</span></td>
											
											
											</tr>
											    
                                             
											
											</table>
											
											
											</td>
											<td width="250">
											
											<img src="img/test.jpg" alt="User Image" style="width:300px;height:350px;">
											
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
                            </fieldset>
                        </td>
                    </tr>
                </table>
            
            </td>
        </tr>
    </table>
</body>
</html>