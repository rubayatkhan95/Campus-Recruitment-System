

<?php include "../service/person_service.php"; ?>


<?php



   if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['userType']=="STUDENT"){
        $person['name']=$_POST['name'];
            $person['username']=$_POST['username'];
            $person['email']=$_POST['email'];
            $person['password']=$_POST['password'];
            $person['userType']=$_POST['userType'];

        
        if(addPerson($person)==true){
            echo "<script>
                    alert('Record Added to STUDENT');
                    document.location='homepage.php';
                 </script>";
        }
    }


    else if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['userType']=="ORGANIZATION"){
        $person['name']=$_POST['name'];
            $person['username']=$_POST['username'];
            $person['email']=$_POST['email'];
            $person['password']=$_POST['password'];
            $person['userType']=$_POST['userType'];

        
        if(addOrganization($person)==true){
            echo "<script>
                    alert('Record Added to ORGANIZATION');
                    document.location='homepage.php';
                 </script>";
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    
        <table border="1" align="center" width="100%" cellspacing="0" bgcolor="#0F1F3A">
            <tr>
                <td><br>
                    <input type="image" name="logo" align="left" src="img/CRS.jpg" width="20%" height="20%">
                <!--
                    <h5 align="right">
                        <font color="white" size="4m">Username:</font>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="loginusername">
                        <font color="white" size="4m">Password:</font>&nbsp;&nbsp;&nbsp;
                        <input type="Password" name="Password">&nbsp;&nbsp;&nbsp;

                        <button type="button" onclick="location.href='../app/temporary_login.php'"><font color="red" size="4em" /><b/>Log in</button>
                        </h5>
                    -->
                </td>
            </tr>
            <tr background="img/meeting.jpg">
                <td valign="top" align="center">
                    <table>
                        <tr>
                            <td valign="top" align="center" width="80%" height="700px">

                                
                                    <br><br><br>

                                    
                           


    <form method="post">
      <table>
                        <tr>
                            <td valign="top" align="center" width="80%" height="700px">

                                
                                    <br><br><br>

                                    <fieldset style="background-color:white ">
                                
                                    <h1><font color="#F78541" size="25em">Sign Up</font></h1>

                            <form action="post">

                                  <font color="teal" size="4em">Name:</font><br>
                                  <input type="text" name="name">
                                  <br>
                                  <font color="teal" size="4em">Username:</font><br>
                                  <input type="text" name="username">
                                  <br>
                                  <font color="teal" size="4em">E-Mail:</font><br>
                                  <input type="text" name="email">
                                  <br>
                                  <font color="teal" size="4em">Password:</font><br>
                                  <input type="password" name="password">
                                  <br>
                                  <font color="teal" size="4em">Confirm Password:</font><br>
                                  <input type="password" name="confirm_password">
                                  <br>
                                  <font color="teal" size="4em">Select User Type:</font><br>

                                    <select name="userType">

                                      <font color="#F78541" /><option value="STUDENT">STUDENT</option>
                                      <font color="#F78541" /><option value="ORGANIZATION">ORGANIZATION</option>
                                      
                                    </select><br>
                                  <br><br>
                                 <input type="submit" value="SIGN UP">
                                 <button type="button" onclick="location.href='../app/homepage.php'">CANCEL</button>



                                  </fieldset>
                                </form> 



                                <br><br><br><br>

                                
                            </td>


                            
                        </tr>




                        </td>


                            
                        </tr>


                    </table>
                </td>
            </tr>

            <tr align="center">
                <td>
                
                <button type="button" onclick="location.href='https://www.facebook.com'"><img src="img/facebook.jpg" width="30px" height="30px"></button>
                <button type="button" onclick="location.href='https://www.linkedin.com'"><img src="img/linkedin.jpg" width="30px" height="30px"></button>
                <button type="twitter.jpg" onclick="location.href='https://twitter.com'"><img src="img/facebook.jpg" width="30px" height="30px"></button>
                <button type="button" onclick="location.href='https://www.fiverr.com'"><img src="img/fiverr.jpg" width="30px" height="30px"></button>
                <button type="button" onclick="location.href='https://github.com'"><img src="img/github.jpg" width="30px" height="30px"></button>

                </td>
            </tr>


                    </table>
                </td>
            </tr>
        </html>