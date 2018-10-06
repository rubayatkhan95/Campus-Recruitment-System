

<?php include "../service/person_service.php"; ?>
<?php session_start() ?>

<?php
if (!isset($_SESSION['username']))
{
	header('location:loginpage.php');
	exit();
}
?>
<?php

$organization=$_SESSION['username'];

$username="";
$id="";


  
  $organizations = getOrganizationsByUsername($organization);

        foreach ($organizations as $org) {
          
         $username=$org["username"];
         $id=$org["id"];
          $gender=$org["gender"];
          $email=$org["email"];
          $contact=$org["mobile_no"];
          $address=$org["address"];
          
          



         
        

          
 



        
        
        if(editOrganization($organization)==true){
            echo "<script>
                    alert('Record Updated');
                    document.location='org_editProfile_view.php';
                 </script>";
            die();
        }
    }
   ?>
<hr/>
<a href="org_retrieve.php">HOME</a>
<a href="org_update.php?id=<?= $organization['id'] ?>">EDIT</a>
<a href="org_delete.php?id=<?= $organization['id'] ?>">DELETE</a>
<hr/>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>
    <table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
        <tr align="left">
            <td colspan="2">
                
                <input type="image" name="logo" src="img/CRS.jpg" width="25%" height="25%">

                    <nav align="right">

                        <button type="button" onclick="location.href='org_home_view.php'"><font color="red" size="4em" /><b/>Home</button>
                        <button type="button" onclick="location.href='org_profile_view.php'"><font color="red" size="4em" /><b/>Profile</button>
                        <button type="button" onclick="location.href='org_whoWeAre_view.<?php  ?>'"><font color="red" size="4em" /><b/>Who We Are</button><!-- Changes will apply here -->
                        <button type="button" onclick="location.href='homepage.php'"><font color="red" size="4em" /><b/>Log Out</button>
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
                    <span><a href="org_editProfile_view.php" style="text-decoration:none"><font color="teal" size="5em" />Edit Profile </a></span>
                    <hr width="150" align="left" size="5">
                    <span><a href="../app/org_security_view.php" style="text-decoration:none"><font color="teal" size="5em" />Security</a></span>
                    <hr width="150" align="left" size="5">
                    <span><a href="org_editAbout_view.php" style="text-decoration:none"><font color="teal" size="5em" />About</a></span>
                    <hr width="150" align="left" size="5">
                    <span><a href="org_editFaq_view.php" style="text-decoration:none"><font color="teal" size="5em" />FAQ</a></span>
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
                            GENEREL
                        </h2>
                    </legend>


                                <table>
                                    <tr>
                                        <td width="800">
                                            
                                            <form method="post">
                                            <table>
                                            
                                                <tr>
                                                
                                                <td><button><font color="red" size="4em" />COMPANY INFO</button></td>
                                                <td></td>
                                                </tr>
                                                
                                                 <tr>

                                            <tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Company Name</span></td>
                                            <td style="text-align:left; padding:6px"><input size="30" type="text" name="name" value="<?= $username ?>"></td>
                                            
                                            </tr>
                                            <tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Job Title</span></td>
                                            <td style="text-align:left; padding:6px"><input size="30" type="text" name="job_title" value="<?= $org['job_title'] ?>"></td>
                                            
                                            </tr>


                                            
                                            <tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Address</span></td>
                                            <td style="text-align:left; padding:6px">
                                            <input type="text" name="address" value="<?= $org['address'] ?>">
                                            </td>
                                            
                                            </tr>

                                             <tr>
                                                
                                                <td>
                                                    <br><br><br>
                                                    
                                                    <button><font color="red" size="4em" />USER INFO</button></td>
                                                <td></td>
                                                </tr>
                                             <tr>
                                                
                                            
                                            </tr>
                                                
                                                
                                            
                                                
                                             
                                                
                                             
                                                   
                                              <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Gender</span></td>
                                            <td style="text-align:left;padding:6px"><form >
                                                  <input type="text" name="gender" value="<?= $org['gender'] ?>"><br>
                                                  
                                                
                                                  
                                                  </td>
                                            </tr>
                                                    
                                         
                                                
                                                
                                                
                                           
                                            
                                                
                                                
                                                
                                                  
                                           
                                                
                                                
                                           
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Nationality</span></td>
                                            <td style="text-align:left; padding:6px"> <input type="text" name="nationality" value="<?= $org['nationality'] ?>"></td>
                                            </tr>    
                                                

                                            </tr>
                                            <tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Email</span></td>
                                            <td style="text-align:left; padding:6px"><input size="30" type="email" name="email" value="<?= $organization['email'] ?>" ></td>
                                            
                                            
                                            </tr>
                                            <tr>
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Contact</span></td>
                                            <td style="text-align:left; padding:6px"><input size="30" type="text" name="mobile_no" value="<?= $organization['mobile_no'] ?>"></td>
                                            
                                            
                                            </tr>
                                           
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <tr>
                                            <td style="text-align:left; padding:6px"></td>
                                            <td style="text-align:left; padding:6px">
                                            <input type="submit" value="Update">
                                            <button type="button" onclick="location.href='student_home_view.php'"><font color="red" size="4em" /><b/>Cancel</button>
                                            
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



