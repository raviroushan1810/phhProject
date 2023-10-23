<?php
include("connect.php");

$id = $_GET['id'];
$query = "DELETE FROM respondtable WHERE id = '$id' ";
$data = mysqli_query($connection, $query);
if($data){
    //echo "record deleted";
    ?>
    <meta http-equiv="refresh" content="1; url=http://localhost/vplakProject/server.php" />
    <?php
}
else{
    echo "Fail to delete";
}

?>