<?php session_start() ?>

<?php
  include ("../service/person_service.php");
 ?>

<?php

$org=$_SESSION['username'];

$username="";
$id="";


  
  $organizations = getPersonsByUsername($org);

        foreach ($organizations as $org) {
            $name=$org["name"];
         $username=$org["username"];
             $id=$org["id"];
            $fathers_name=$org["fathers_name"];
             $mothers_name=$org["mothers_name"];
          $gender=$org["gender"];
          $email=$org["email"];
          $contact=$org["mobile_no"];
          $dob=$org["dob"];
        
         
          $nationality=$org["nationality"];
          
          
           $present_address =$org["present_address"];
        


         
        

          }
 


?>
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StudentProfile </title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">
						<nav align="right">

						<button type="button" onclick="location.href='../app/student_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='../app/student_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='../app/Student_searchJobOffers_view.php'"><font color="red" size="4em" /><b/>Job Offers</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='../app/homepage.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
					</nav>
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
				     <span><a href="student_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />Update Profile</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="S_security_view.php "style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
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
							</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							Username
						</h2>
					</legend>


								<form>
								<table>
                                    
									<tr>
										<td width="500">
                                            
                                            <button><font color="red" size="4em" />BASIC INFO</button>
 											<br>
 											<br>
											<br>
                                            
                                            <table>
                                            
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Name :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$name";?>



											</tr>
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Mother's Name :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$mothers_name";?>
											</tr> 
                                            
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Father's Name</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$fathers_name";?>
                                                  
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Date Of Birth :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$dob";?>
											</tr>
                                                   
                                              <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Gender :</span></td>
											<td style="text-align:left;padding:6px"><?php echo "$gender";?>
                                                  
                                                  
                                                  </td>
											</tr>
                                                    
                                         
                                                
                                                
                                                
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />E-mail :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$email";?>
											</tr>
                                                   
                                            
                                                
                                                
                                                
                                                  
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Parmanent Address :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$present_address";?>
											</tr>    
                                             
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Present Address :</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$present_address";?>
											</tr>
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Nationality</span></td>
											<td style="text-align:left; padding:6px"><?php echo "$nationality";?>
											</tr>    
                                                
                                                   
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Maritial Status</span></td>
											<td style="text-align:left; padding:6px"><?php echo "single";?>
											</tr>    
                                            
                                                
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Religion</span></td>
											<td style="text-align:left; padding:6px"><?php echo "islam";?>
											</tr>    
                                                 
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Mobile No</span></td>
											<td style="text-align:left; padding:6px"><?php echo "11111";?>
											</tr>
                                                
                                           
                                                
                                            <tr>
                                             
                                       
                                                
                                            <td>      <br><br><br><br> 
                                                <button><font color="red" size="4em" />EDUCATIONAL INFO</button>
                                                  <br><br>
                                                </td>
                                            <td></td>
                                                
                                                
                                            </tr> 
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span></td>
											
											</tr>
                                                    
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Institute/University</span></td>
											
											</tr>  
                                                
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> 2012
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px">5
											</tr>
                                                
                                            <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span></td>
											<td style="text-align:left; padding:6px"> HSC
                                                
                                                
                                                </td>
											</tr>   
                                             
                                            
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px">2014
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px"> 5
											</tr>
                                                
                                            <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span>BSC
                                                
                                                
                                                
                                                </td>
											</tr>    
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> 2017
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px">ABC
											</tr>
                                                
                                                
                                                <tr>
                                             
                                       
                                                
                                            <td>      <br><br><br><br> 
                                                <button><font color="red" size="4em" />Skills</button>
                                                  <br><br>
                                                </td>
                                            <td></td>
                                                
                                                
                                            </tr>
                                                
                                                
                                                <tr>
                                                
                                                
											
                                                    <td style="text-align:left; padding:10px"> 
                                                    
                                                    <ul>
                                                
                                                <li> HTML  </li>
                                                <li> JAVA </li>
                                                <li> GPRAPHIC DESIGN</li>
                                                <li> JAVASRIPT </li>
                                                <li> C++  </li>        
                                                
                                                
                                                    </ul>
                                                    
                                                    
                                                    
                                                    </td>
                                                    <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> </span></td>
                                                
                                                
                                                
                                                </tr>
                                                
                                                
                                                
                                                <!--experience-->
                                                
                                                
                                                <tr>
                                             
                                       
                                                
                                            <td>      <br><br><br><br> 
                                                <button><font color="red" size="4em" />Experience</button>
                                                  <br><br>
                                                </td>
                                            <td></td>
                                                
                                                
                                            </tr>
                                                
                                                
                                                <tr>
                                                
                                                
											
                                                    <td style="text-align:left; padding:10px"> 
                                                    
                                                    <ul>
                                                
                                                <li> aaaa  </li>
                                                <li> aaaa  </li>
                                                <li> aaaa</li>
                                                  
                                                
                                                
                                                    </ul>
                                                    
                                                    
                                                    
                                                    </td>
                                                    <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> </span></td>
                                                
                                                
                                                
                                                </tr>
                                                
                                                
                                                
                                               
                                            </table>
                                            
                                            
 											 </td>	

											
											

											

											
											
											




 											
                                           
											
											



                                       
										
										<td width="300" align="center" valign="top">
											<img src="img/hijab.png" width="60%" >
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<br>
											<br>
											
										</td>
									</tr>
                                    
                                    
                                    
                                    
                                    <tr>
                                    <td></td>
                                   
                                       
                                    
                                    
                                    </tr>
								</table>
                                </form>
							</fieldset>
						</td>
					</tr>
                    
				</table>
</body>
</html>



