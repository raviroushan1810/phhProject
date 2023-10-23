<?php
    $serverName = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "respondtoclient";

   $connection   = mysqli_connect($serverName, $username, $password, $dbname);

    if($connection){
        //echo "connection built";
    }
    else
    {
        echo "connection failed";
    }

?>
