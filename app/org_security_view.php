<?php session_start() ?>
<?php include "../service/person_service.php"; ?>

<?php
    $organizationId =$_GET['id'];
    $organization = getOrganizationById($organizationId);
?>



<?php
    $organizationId = $_REQUEST['id'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $organization['id']=$organizationId;
        $organization['name']=$_POST['name'];

         $organization['job_title']=$_POST['job_title'];

         $organization['address']=$_POST['address'];
        
        $organization['username']=$_POST['username'];
         $organization['gender']=$_POST['gender'];
          $organization['nationality']=$_POST['nationality'];
        $organization['email']=$_POST['email'];
        $organization['mobile_no']=$_POST['mobile_no'];
         
        
        
        if(editOrganization($organization)==true){
            echo "<script>
                    alert('Record Updated');
                    document.location='org_retrieve.php';
                 </script>";
            die();
        }
    }
    $organization = getOrganizationById($organizationId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security</title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

					<nav align="right">

						<button type="button" onclick="location.href='../app/org_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='../app/org_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='../app/org_whoWeAre_view.php'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='../app/homepage.php'"><font color="red" size="4em" /><b/>Log Out</button>
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
					
				<b/><span>Edit Profile</span>
				</font></legend>
				<br><br>
				<ul>
				     <span><a href="org_editProfile_view.html" style="text-decoration:none"><font color="teal" size="5em" />General </a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_security_view.php" style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_editAbout_view.php" style="text-decoration:none"><font color="teal" size="5em" />About</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="../app/org_editFaq_view.php" style="text-decoration:none"><font color="teal" size="5em" />FAQ</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="homepage.php" style="text-decoration:none"><font color="teal" size="5em" />Delete account</a></span>
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
							Security
						</h2>
					</legend>


								<table>
									<tr>
										<td width="800">
											
											
											<table>
											
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Current Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="password" name="password"  value="<?= $organization['password'] ?>" ></td>
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />New Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="password" name="password"  value="<?= $organization['password'] ?>"></td>
											
											
											</tr>
											<tr>
											<td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Confirm-New Password</span></td>
											<td style="text-align:left; padding:6px"><input size="30" type="password" name="firstname" value="...@...com"></td>
											
											
											</tr>
											
											
											
											<tr>
											<td style="text-align:left; padding:6px"></td>
											<td style="text-align:left; padding:6px" colspan="3">
											
											<button align="right"type="button" onclick="location.href='S_home.html'"><font color="red" size="4em" /><b/>Cancel</button>
											
											<input type="submit" value="submit">
											
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
</body>
</html>



