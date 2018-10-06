<?php include "../service/person_service.php"; ?>
<hr/>
<a href="org_retrieve.php">HOME</a>
<hr/>
<?php
    $organizationId = $_REQUEST['id'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $organization['id']=$organizationId;
        $organization['name']=$_POST['name'];
        $organization['email']=$_POST['email'];
        
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
<fieldset>
    <legend>UPDATE</legend>
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
                    <input name="name" value="<?= $organization['name'] ?>" />
                </td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td>
                    <input name="email" value="<?= $organization['email'] ?>" />
                </td>
            </tr> 
        </table>
        <hr/>
        <input type="submit" value="SAVE" />
    </form>
</fieldset>