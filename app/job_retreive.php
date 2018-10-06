<?php include "../service/person_service.php"; ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $jobs = getJobsByTitle($searchKey);
    }


     else {
         $jobs = getAllJobs();
    }
?>
<hr/>
<a href="org_postAJob_view.php">Homepage</a>
<hr/>
<fieldset>
    <legend>RETRIEVE</legend>

    <form method="post">                
        <input name="search"/>
        <input type="submit" value="SEARCH"/>                
    </form>

    <table border="1" cellspacing="0" cellpadding="5">
        <?php if (count( $jobs) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ( $jobs as  $job) { ?>
            <tr>
                <td><?=  $job['job_title'] 

                

                ?></td>
                <td><a href="org_postAJob_view.php?id=<?= $job['id'] ?>">detail</a></td>
                
        <?php } ?>
    </table>
</fieldset>
   