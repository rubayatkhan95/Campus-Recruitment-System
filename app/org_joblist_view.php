<?php include "../service/person_service.php"; ?>



<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $organizations = getJobsByTitle($searchKey);
    }


     else 
     {
        $organizations = getAllJobs();
    }
?>


   
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Job list</title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">

						<button type="button" onclick="location.href='org_home_view.html'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='org_profile_view.html'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='org_whoWeAre_view.html'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.html'"><font color="red" size="4em" /><b/>Log Out</button>
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
					
				<b/><span>job list</span>
				</font></legend>
				<br><br>
				<ul>
				
				    
				   
					<span><a href="../app/org_postAJob_view.php" style="text-decoration:none"><font color="teal" size="5em" />Post A Job</a></span>
					<hr width="150" align="left" size="5">
					
					 <span><a href="org_joblist_view.php" style="text-decoration:none"><font color="teal" size="5em" />Job List</a></span>
					<hr width="150" align="left" size="5">
					
					
					<span><a href="org_searchEmployee_view.php" style="text-decoration:none"><font color="teal" size="5em" />Search Employee</a></span>
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
							Job list
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											
											<table>

												<form method="post">                
        <input name="search"/> 
        <input type="submit" value="SEARCH"/> (search by Job_Title)               
    </form>


    <fieldset>
    	<table border="1" cellspacing="0" cellpadding="5">
											 <tr >
												<th>Job Title</th>
												<th>Job Nature</th>
												<th>Location</th>
												<th>Salary</th>
												<th></th>
												
											  </tr>
											  <tr >
												


   

    

    
        <?php if (count($organizations) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($organizations as $organization) { ?>
            <tr>
                <td ><?= $organization['job_title'] 

                

                ?></td>
                <td ><?= $organization['job_nature'] 

                

                ?></td>
                <td ><?= $organization['location'] 

                

                ?></td>
                <td ><?= $organization['salary'] 

                

                ?></td>
                <td><button type="button" onclick="location.href='../app/org_job_detail_view.php'"><font color="green" size="4em" /><b/>View Detail</button>
										</td>
                
            </tr>
        <?php } ?>
    </table>
</fieldset>






											
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








