<?php 
session_start();
if((!isset($_SESSION['username'])) || ($_SESSION["userType"]!="admin"))
	{		
		header('location: ../homepage.html');
		exit();
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "person_db";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM admin WHERE username='".$_SESSION['username']."'";
	
	$result = $conn->query($sql);

	if ($result->num_rows >= 0) {
	    while($row = $result->fetch_assoc()) {
	    
    	$_SESSION["viewUsername"]=$row['username'];
    	$_SESSION["viewId"]=$row['id'];
    	$_SESSION["viewImage"]=$row['img'];	
    }
    } else {
		    echo "0 results";
	}
	$conn->close();
?>
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Profile</title>
</head>
<body>
	<form method="POST" action="admin_uploadpp.php" enctype="multipart/form-data">
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
				
				<input type="image" name="logo" align="left" src="img/CRS.jpg" width="20%" height="20%">
				<br>

					<nav align="right">

						<button type="button" onclick="location.href='admin_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='A_profile.php'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='A_userinfo.html'"><font color="red" size="4em" /><b/>User Info</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='logout.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
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
						<a href="A_editProfile.php"><font color="teal" size="4em" />Edit Profile</a>
					</li>
					<hr>
					<li type="square"><a href="A_changepassword.php"><font color="teal" size="4em" />Change Password</a></li><hr>
					<br><br>
					
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
<fieldset>
								<legend><h3><font color="teal" size="4em" />PROFILE PICTURE</h3></legend>
								<table >
									<tr>
										<td align="center">
											<img src=<?php echo $_SESSION["viewImage"]; ?> alt=<?php echo $_SESSION['username'] ?> width="150" height="200">
											<br><br>
											<input type="file" name="file">
										</td>
										</td>
									</tr>
									<tr>
										<td >
											<hr>
											<button type="submit" name="submit">Upload</button>
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
</form>
</body>
</html>