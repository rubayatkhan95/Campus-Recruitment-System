

 <?php
 session_start();
 ?>


 <?php
  include ("../service/person_service.php");
 ?>
 
 <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
     {   
       
        
      $a="";
      $p="";
      $x="";
      $y="";
      $b="";
      $c="";
      $id1="";
        $id2="";

          $id3="";
        $searchKey = $_POST['username'];
         $searchKey2=   $_POST['password'];
        //$organizations = getOrganizationsByName($searchKey);
        $organizations = getOrganizationsByUsername($searchKey);
         $persons = getPersonsByUsername($searchKey);
         $admins = getAdminsByUsername($searchKey);

        

        


       

        foreach ($organizations as $org) {
            global $a,$p,$id1;
         $a=$org["username"];

         // $a=$org["name"];
            $p=$org["password"];
             $id1=$org["id"];

        

          }

         foreach ($persons as $per) {


          global $x,$y;

           $x=$per["username"];

         // $a=$org["name"];
            $y=$per["password"];

             $id2=$per["id"];
         



        }

        foreach ($admins as $ad) {


          global $b,$c;

           $b=$ad["username"];

         // $a=$org["name"];
            $c=$ad["password"];

           $id3=$ad["id"];



        }
    
     if($a==$searchKey && $p==$searchKey2)
        {

          $_SESSION["username"]=$a;
          $_SESSION["id"]=$id1;
          
          header('location: org_home_view.php');
          

       

        }
         if($x==$searchKey && $y==$searchKey2)
        {

          $_SESSION["username"]=$x;
          $_SESSION["id"]=$id2;
          
          header('location: S_home_view.php');

        }
        if($b==$searchKey && $c==$searchKey2)
        {
          $_SESSION["username"]=$b;
          $_SESSION["id"]=$id3;
        
          
          header('location: admin_home_view.php');

        }


     else "invalid";


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

              <form method="post">

                  <tr>
                      <td><br>
                          <input type="image" name="logo" align="left" src="img/CRS.jpg" width="20%" height="20%">
                      
                          <h5 align="right">
                              <font color="white" size="4m">Username:</font>&nbsp;&nbsp;&nbsp;
                              <input type="text" name="username">
                              <font color="white" size="4m">Password:</font>&nbsp;&nbsp;&nbsp;
                              <input type="password" name="password">&nbsp;&nbsp;&nbsp;
                              
                              
                              <input type="submit"  value="LOG IN">
                             
                          </h5>
                          
                      </td>
                   </tr>
                </form>
            <tr background="img/meeting.jpg">
                <td valign="top" align="center">
                    <table>
                     
                        <tr><br><br><br><br>
                         <h4><font color="red" size="4m">REGISTER NOW : &nbsp&nbsp&nbsp</font></h4>
                   
                          <button type="twitter.jpg" onclick= "location.href='../app/loginpage.php'"  size="30px">SIGN UP</button>
                            <td valign="top" align="center" width="80%" height="700px">

                                    <br><br><br>
                               
                                    
        <!--                   


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
        -->

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





