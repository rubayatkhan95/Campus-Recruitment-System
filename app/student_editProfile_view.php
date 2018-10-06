




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
							Update Profile
						</h2>
					</legend>


								<form method="post">
								<table>
                                    
									<tr>
										<td width="500">
                                            
                                            <button><font color="red" size="4em" />BASIC INFO</button>
 											<br>
 											<br>
											<br>
                                            
                                            <table>
                                            
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Name</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="name"></td>
											</tr>
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Mother's Name</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="mothers_name"></td>
											</tr>
                                            
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Father's Name</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="fathers_name"></td>
											</tr>
                                                 
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Date Of Birth</span></td>
											<td style="text-align:left; padding:6px"> <input type="date" name="dob"></td>
											</tr>
                                                   
                                              <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Gender</span></td>
											<td style="text-align:left;padding:6px"><form >
                                                  <input type="radio" name="gender" value="male" checked> Male<br>
                                                  <input type="radio" name="gender" value="female"> Female<br>
                                                  <input type="radio" name="gender" value="other"> Other
                                                </form>
                                                  
                                                  </td>
											</tr>
                                                    
                                         
                                                
                                                
                                                
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />E-mail</span></td>
											<td style="text-align:left; padding:6px"> <input type="email" name="email"></td>
											</tr>
                                                   
                                            
                                                
                                                
                                                
                                                  
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Parmanent Address</span></td>
											<td style="text-align:left; padding:6px"> <input type="address" name="parmanent_address"></td>
											</tr>    
                                             
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Present Address</span></td>
											<td style="text-align:left; padding:6px"> <input type="address" name="present_address"></td>
											</tr>
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Nationality</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="nationality"></td>
											</tr>    
                                                
                                                   
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Maritial Status</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="maritial_status"></td>
											</tr>    
                                            
                                                
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Religion</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="religion"></td>
											</tr>    
                                                 
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Mobile No</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="mobile_no" ></td>
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
											<td style="text-align:left; padding:6px"> <input type="text" name="degree_1" ></td>
											</tr>
                                                    
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Institute/University</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="institute_1" ></td>
											</tr>  
                                                
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="year_of_passing_1"></td>
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="grade_1" ></td>
											</tr>
                                                
                                           <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="degree_2" ></td>
											</tr>
                                                    
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Institute/University</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="institute_2" ></td>
											</tr>  
                                                
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="year_of_passing_2"></td>
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="grade_2" ></td>
											</tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="degree_3" ></td>
											</tr>
                                                    
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Institute/University</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="institute_3" ></td>
											</tr>  
                                                
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="year_of_passing_3"></td>
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="grade_3" ></td>
											</tr>


											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Degree</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="degree_4" ></td>
											</tr>
                                                    
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Institute/University</span></td>
											<td style="text-align:left; padding:6px"> <input type="text" name="institute_4" ></td>
											</tr>  
                                                
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Year Of Passing</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="year_of_passing_4"></td>
											</tr>
                                              
                                             <tr>   
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Grade</span></td>
											<td style="text-align:left; padding:6px"> <input type="number" name="grade_4" ></td>
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
                                                    
                                                    
                                                
                                                 <input type="text" name="skills" > 
                                                
                                                
                                                  
                                                    
                                                    
                                                    
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
                                                    
                                                    
                                                
                                                <input type="text" name="experience" >
                                               
                                                  
                                                
                                                
                                                 
                                                    
                                                    
                                                    
                                                    </td>
                                                    <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> </span></td>
                                                
                                                
                                                
                                                </tr>
                                                
                                                
                                                
                                               
                                            </table>
                                            
                                            
 											 </td>	

											
											

											

											
											
											




 											
                                           
											
											



                                       
										
										<td width="300" align="center" valign="top">
											<img src="img/facebook.jpg" width="60%" >
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<br>
											<br>
											<button><a href="student_change_profilePic.html">Change</a></button>
										</td>
									</tr>
                                    
                                    
                                    
                                    
                                    <tr>
                                    <td></td>
                                    <td>

                                    <input type="reset"  value="RESET">
                                    <input type="submit" value="UPDATE">
                                        </td>
                                    
                                    
                                    </tr>
								</table>
                                </form>
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
							<!--<input type="search" id="mySearch" name="mysearch">
    						<button>Search</button>
    					-->
						</font>
					</h5>
				</td>

    </table>
    </body>
</html>


	
		




