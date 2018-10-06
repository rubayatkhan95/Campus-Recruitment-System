
<?php include "../service/person_service.php"; ?>



<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $organizations = getOrganizationsByName($searchKey);
    }


     else 
     {
        $organizations = getAllOrganizations();
    }
?>





<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Profile</title>
</head>
<body>
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" align="left" src="img/CRS.jpg" width="20%" height="20%">
				<br>

					<nav align="right">

						<button type="button" onclick="location.href='admin_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='A_S_profile.php'"><font color="red" size="4em" /><b/>Profile</button>
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
					
				<b/> Organization PROFILE
				</font></legend>
				<br><br>
				<ul>
					
					
					<li type="square"><a href="A_viewStudent.php"><font color="teal" size="4em" /> View Student</a></li><hr>
					<li type="square"><a href="A_view_org.php"><font color="teal" size="4em" /> View Organization</a></li><hr>
					

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
							Organizations
						</h2>
					</legend>


								<table>
									<form method="post">                
        <input name="search"/>
        <input type="submit" value="SEARCH"/>                
    </form>
    <br>

    <table border="2" cellspacing="0" cellpadding="5">
    	<tr>
                <th><h4><font color="red">Name</font></h4></th>
                <th><h4><font color="red">Email</font></h4></th>
                <th><h4><font color="red">Gender</font></h4></th>
                <th><h4><font color="red">Mobile_No</font></h4></th>
                <th><h4><font color="red">Address</font></h4></th>
                 
            </tr>
        <?php if (count($organizations) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($organizations as $organization) { ?>
        		

            <tr>
                <td><?= $organization['name']?></td>
                <td><?= $organization['email']?></td>
                <td><?= $organization['gender']?></td>

                <td><?= $organization['mobile_no']?></td>
                <td><?= $organization['address']?></td>
                
                <td style="text-align:center; padding:6px">
												<button type="button" onclick="location.href='Admin_to_student_view.php'"><font color="green" size="4em" /><b/>View Detail</button>
										
											</td>
               
            </tr>
        <?php } ?>
    </table>

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
