<?php include "../service/person_service.php"; ?>


<?php



   if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['userType']=="ADMIN"){
           
            $person['username']=$_POST['username'];
            $person['email']=$_POST['email'];
            $person['password']=$_POST['password'];
            

        
        if(addAdmin($person)==true){
            echo "<script>
                    alert('Record Added to Admin');
                    document.location='A_viewadmin.php';
                 </script>";
        }
    }


   
?>



		

	







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
					
				<b/> ADMIN PROFILE
				</font></legend>
				<br><br>
				<ul>
					<hr>
					
					<li type="square"><a href="A_viewadmin.php"><font color="teal" size="4em" />View Admin</a></li><hr>
					<li type="square"><a href="A_addadmin.php"><font color="teal" size="4em" />Add Admin</a></li><hr>

					<br><br>
					
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					


								<form method="post">
      <table>
                        <tr>
                            <td valign="top" align="center" width="80%" height="700px">

                                
                                    <br><br><br>

                                    <fieldset style="background-color:white ">
                                
                                    <h1><font color="#F78541" size="25em">ADD ADMIN</font></h1>

                            <form action="post">

                                  
                                  
                                  <font color="teal" size="4em">Username:</font><br>
                                  <input type="text" name="username">
                                  <br>
                                  <font color="teal" size="4em">E-Mail:</font><br>
                                  <input type="text" name="email">
                                  <br>
                                  <font color="teal" size="4em">Password:</font><br>
                                  <input type="password" name="password">
                                  <br>
                                                           
                                  <br>
                                  <font color="teal" size="4em">Select User Type:</font><br>

                                    <select name="userType">

                                      <font color="#F78541" /><option value=" "></option>
                                      <font color="#F78541" /><option value="ADMIN">ADMIN</option>
                                      
                                    </select><br>
                                  <br><br>
                                 <input type="submit" value="SIGN UP">
                                 <button type="button" onclick="location.href='../app/A_addadmin.php'">CANCEL</button>



                                  </fieldset>
                                </form> 
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