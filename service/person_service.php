<?php include("data_access.php"); ?>
<?php
    function addPerson($person){
        $sql = "INSERT INTO person(id, name,username, email,password,userType) VALUES(NULL, '$person[name]', '$person[username]', '$person[email]','$person[password]', '$person[userType]')";
        $result = executeSQL($sql);
        return $result;
    }

     function addAdmin($person){
        $sql = "INSERT INTO admin ( username, email,password) VALUES('$person[username]', '$person[email]','$person[password]')";
        $result = executeSQL($sql);
        return $result;
    }

     

     function addOrganization($person){
        $sql = "INSERT INTO organization(id, name,username, email,password,userType) VALUES(NULL, '$person[name]', '$person[username]', '$person[email]','$person[password]', '$person[userType]')";
        $result = executeSQL($sql);
        return $result;
    }
    function addJob($job){
        $sql = "INSERT INTO job (id,job_title,job_nature,education,salary,location) VALUES(NULL, '$job[job_title]' , '$job[job_nature]','$job[education]' ,'$job[salary]','$job[location]')";
        $result = executeSQL($sql);
        return $result;

    }

   
    
    /* function addJob($job){
        $sql = "INSERT INTO job (id,job_title,job_nature,job_requirment,salary,benifits,location,cv_address) VALUES(NULL, '$job[job_title]' , '$job[job_nature]' , '$job[job_requirment]' , '$job[salary]' , '$job[benifits]' ,'$job[location] ','$job[cv_address]')";
        $result = executeSQL($sql);
        return $result;
    }*/



    
    function editPerson($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }

    /*function editOrganization($organization){
        $sql = "UPDATE organization SET name='$organization[name]', job_title='$organization[job_title]',address='$organization[address]',gender='$organization[gender]', nationality='$organization[nationality]',email='$organization[email]',mobile_no='$organization[mobile_no]' WHERE username=$organization[username]";


        $result = executeSQL($sql);
        return $result;
    }*/



function editOrganization($organization){

   $sql = "UPDATE organization SET  '$organization[name]','$organization[email]' WHERE id= $organization[id]"; 
    $result = executeSQL($sql);
        return $result;
}


    function editOrganizationPassword($organization){
        $sql = "UPDATE organization SET password='$organization[password]' WHERE id=$organization[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePerson($personId){
        $sql = "DELETE FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        return $result;
    }
     function removeOrganization($organizationId){
        $sql = "DELETE FROM organization WHERE id=$organizationId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllPersons(){
        $sql = "SELECT * FROM person";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
      function getAllJobs(){
        $sql = "SELECT * FROM job";        
        $result = executeSQL($sql);
        
        $job = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $job;
    }


    function getAllOrganizations(){
        $sql = "SELECT * FROM organization";        
        $result = executeSQL($sql);
        
        $organization = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $organization[$i] = $row;
        }
        
        return $organization;
    }


    function getAllAdmins(){
        $sql = "SELECT * FROM admin";        
        $result = executeSQL($sql);
        
        $organization = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $organization[$i] = $row;
        }
        
        return $organization;
    }
    
    function getPersonById($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }

    function getJobById($jobId){
        $sql = "SELECT * FROM job WHERE id=$jobId";        
        $result = executeSQL($sql);
        
        $job = mysqli_fetch_assoc($result);
        
        return $job;
    }
    
function getOrganizationById($organizationId){
        $sql = "SELECT * FROM organization WHERE id=$organizationId";        
        $result = executeSQL($sql);
        
        $organization = mysqli_fetch_assoc($result);
        
        return $organization;
    }

    function getPersonsByName($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }


    function getPersonsByUsername($personUsername){
        $sql = "SELECT * FROM person WHERE username LIKE '%$personUsername%'";
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
 function getJobsByTitle($job_title){
        $sql = "SELECT * FROM job WHERE job_title LIKE '%$job_title%'";
        $result = executeSQL($sql);
        
        $job= array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
             $job[$i] = $row;
        }
        
        return $job;
    }


    function getOrganizationsByName($organizationName){
        $sql = "SELECT * FROM organization WHERE name LIKE '%$organizationName%'";
        $result = executeSQL($sql);
        
        $organization = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $organization[$i] = $row;
        }
        
        return $organization;
    }
    function getOrganizationsByUsername($organizationUsername){
        $sql = "SELECT * FROM organization WHERE username LIKE '%$organizationUsername%'";
        $result = executeSQL($sql);
        
        $organization = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $organization[$i] = $row;
        }
        
        return $organization;
    }

    function getAdminsByUsername($adminUsername){
        $sql = "SELECT * FROM admin WHERE username LIKE '%$adminUsername%'";
        $result = executeSQL($sql);
        
        $admin = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $admin[$i] = $row;
        }
        
        return $admin;
    }
?>