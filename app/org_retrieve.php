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
<hr/>
<a href="homepage.php">Hompage</a>
<hr/>
<fieldset>
    <legend>RETRIEVE</legend>

    <form method="post">                
        <input name="search"/>
        <input type="submit" value="SEARCH"/>                
    </form>

    <table border="1" cellspacing="0" cellpadding="5">
        <?php if (count($organizations) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($organizations as $organization) { ?>
            <tr>
                <td><?= $organization['name'] 

                

                ?></td>
                <td><a href="org_editProfile_view.php?id=<?= $organization['id'] ?>">detail</a></td>
                <td><a href="org_update.php?id=<?= $organization['id'] ?>">edit</a></td>
                <td><a href="org_delete.php?id=<?= $organization['id'] ?>">delete</a></td>
            </tr>
        <?php } ?>
    </table>
</fieldset>
   