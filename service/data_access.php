<?php
    $host="127.0.0.1";
    $user="root";
    $pass="";
    $dbname="person_db";
    $port=3306;
   
    function executeSQL($sql){
        global $host, $user, $pass, $dbname, $port;
        
        $link=mysqli_connect($host, $user, $pass, $dbname, $port);
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        
        return $result;
    }
?>