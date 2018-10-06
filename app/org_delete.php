<?php include "../service/person_service.php"; ?>
<hr/>
<a href="retrieve.php">HOME</a>
<hr/>
<?php
    $organizationId=$_REQUEST['id'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(removeOrganization($organizationId)==true){
            echo "<script>
                    alert('Record Deleted');
                    document.location='org_retrieve.php';
                 </script>";
            die();
        }
    }
    $organization = getOrganizationById($organizationId);
?>
<fieldset>
    <legend>ARE YOU SURE?</legend>
    <form method="post">        
        <table border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td>ID:</td>
                <td>
                    <?= $organization['id'] ?>
                </td>
            </tr>
            <tr>
                <td>NAME:</td>
                <td>
                    <?= $organization['name'] ?>
                </td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td>
                    <?= $organization['email'] ?>
                </td>
            </tr> 
        </table>
        <hr/>
        <input type="submit" value="DELETE" />
    </form>
</fieldset>