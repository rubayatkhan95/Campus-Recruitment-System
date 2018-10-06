
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Jobs</title>
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
			<!-- Changes will apply here -->
<!--<tr align="left" >
			<td></td>
			<td colspan="2">
				<nav>
					<button type="button" onclick="location.href='S_home_view.html'">Home</button>
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
					
				<b/><span>Search Job</span>
				</font></legend>
				<br><br>
				<ul>
				    <span><a href="Student_searchJobOffers_view.php" style="text-decoration:none"><font color="teal" size="5em" />Send Offers</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="Student_requestJobOffers_view.php"style="text-decoration:none"><font color="teal" size="5em" />Request Offers</a></span>
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
							JOBs
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											
											
											<span><font color="white" size="4em" />Search By :</span>
											
											&nbsp&nbsp&nbsp&nbsp
											<!--option-->
											<select width="25px">
											  <option value="volvo" selected>Company Name</option>
											  <option value="saab">Job Title</option>
											  <option value="vw">Job Nature</option>
											  
											</select>
       
												
											
											<br><br>

											
											<br><br>
											
											<table  border="1" align="center" width="95%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
											  <tr  >
												<th style="text-align:left; padding:8px">Job Title</th>
												<th style="text-align:left; padding:8px">Job Nature</th>
												<th style="text-align:left; padding:8px">Company Name</th>
												<th style="text-align:left; padding:8px">Vacancy </th>
												<th style="text-align:left; padding:8px"> </th>
												<th style="text-align:left; padding:8px"></th>
												
												
											  </tr>
											  <tr >
												<td style="text-align:left; padding:6px">Web Developer </td>
												<td style="text-align:left; padding:6px">Full time</td>
												<td style="text-align:left; padding:6px">XYZ</td>
												<td style="text-align:left; padding:6px">4</td>
												<td style="text-align:left; padding:6px">
										<button type="button" onclick="location.href='../app/student_job_detail_view.php'"><font color="red" size="4em" /><b/>View Detail</button>
										
										
												
												
												</td>
												<td style="text-align:left; padding:6px">
												<button type="button" ><font color="green" size="4em" /><b/>Accept</button>
												
												
												</td>
												
												
												
												
											  </tr>
											  <tr>
											    <td style="text-align:left; padding:6px">Web Developer </td>
												<td style="text-align:left; padding:6px">Full time</td>
												<td style="text-align:left; padding:6px">XYZ</td>
												<td style="text-align:left; padding:6px">4</td>
												<td style="text-align:left; padding:6px">
										<button type="button" onclick="location.href='../app/student_job_detail_view.php'"><font color="red" size="4em" /><b/>View Detail</button>
										
												</td>
												<td style="text-align:left; padding:6px">
												<button type="button" ><font color="green" size="4em" /><b/>Accept</button>
												
												
												</td>
											    


											 </tr>
											  <tr >
											   <td style="text-align:left; padding:6px">Web Developer </td>
												<td style="text-align:left; padding:6px">Full time</td>
												<td style="text-align:left; padding:6px">XYZ</td>
												<td style="text-align:left; padding:6px">4</td>
												<td style="text-align:left; padding:6px">
										<button type="button" onclick="location.href='../app/student_job_detail_view.php'"><font color="red" size="4em" /><b/>View Detail</button>
										
												
												</td>
												<td style="text-align:left; padding:6px">
												<button type="button" ><font color="green" size="4em" /><b/>Accept</button>
												
												
												</td>
												
											  </tr>
											  <tr>
											   <td style="text-align:left; padding:6px">Web Developer </td>
												<td style="text-align:left; padding:6px">Full time</td>
												<td style="text-align:left; padding:6px">XYZ</td>
												<td style="text-align:left; padding:6px">4</td>
												<td style="text-align:left; padding:6px">
										<button type="button" onclick="location.href='../app/student_job_detail_view.php'"><font color="red" size="4em" /><b/>View Detail</button>
												
												
												</td>
												<td style="text-align:left; padding:6px">
												<button type="button" ><font color="green" size="4em" /><b/>Accept</button>
												
												
												</td>
											  </tr>
											  <tr >
											    <td style="text-align:left; padding:6px">Web Developer </td>
												<td style="text-align:left; padding:6px">Full time</td>
												<td style="text-align:left; padding:6px">XYZ</td>
												<td style="text-align:left; padding:6px">4</td>
												<td style="text-align:left; padding:6px">
										<button type="button" onclick="location.href='../app/student_job_detail_view.php'"><font color="red" size="4em" /><b/>View Detail</button>
												
												
												</td>
												<td style="text-align:left; padding:6px">
												<button type="button" ><font color="green" size="4em" /><b/>Accept</button>
												
												
												</td>
												
												
											  </tr>
											  
											</table>



											
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



