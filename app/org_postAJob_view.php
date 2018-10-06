<?php include "../service/person_service.php"; ?>

<?php



   if($_SERVER['REQUEST_METHOD']=="POST"){

          
            $job['job_title']=$_POST['job_title'];
             $job['job_nature']=$_POST['job_nature'];
             $job['education']=$_POST['education'];
            $job['job_requirment']=$_POST['job_requirment'];
             //$job['benifits']=$_POST['benifits'];
             $job['salary']=$_POST['salary'];
             $job['location']=$_POST['location'];
             //$job['cv_address']=$_POST['cv_address'];
             

        
        if(addJob($job)==true){
            echo "<script>
                    alert('Record Added to POST A JOB');
                    document.location='org_postAJob_view.php';
                 </script>";
        }
    }

    ?>

<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post A Job</title>
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
			
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>Post A Job</span>
				</font></legend>
				<br><br>
				<ul>
				
				
			
				
				     <span><a href="../app/org_postAJob_view.php" style="text-decoration:none"><font color="teal" size="5em" />Post A Job</a></span>
					<hr width="150" align="left" size="5">
					
					 <span><a href="../app/org_joblist_view.php" style="text-decoration:none"><font color="teal" size="5em" />Job List</a></span>
					<hr width="150" align="left" size="5">
					
					
					<span><a href="../app/org_searchEmployee_view.php" style="text-decoration:none"><font color="teal" size="5em" />Search Employee</a></span>
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
							Job Detail
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											<form method="post">
											<table>
											
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Title :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="job_title"></td>
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Nature :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="job_nature"></td>
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Education :</span></td>
											<td style="text-align:left; padding:6px"><input size="30 " type="text" name="education" ></td>
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Requirments :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="job_requirment"></td>
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Salary :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="salary"></td>
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Location :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="location"></td>
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Benifits :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="benifits"></td>
											
											
											</tr>

											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Send Your CV here :</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="text" name="cv_address"></td>
											
											
											</tr>

											<tr>
											
												
											<input type="submit" value="save">
											
											
											</td>
											</tr>
											
											</table>
										</form>
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



