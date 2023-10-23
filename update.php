<?php
include("connect.php");
$id = $_GET['id'];

$query = "SELECT * FROM respondtable WHERE id = $id";
$data = mysqli_query($connection, $query);
$totalRows = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>VplakProject</title>
</head>
<body>
   <div class="container">
    <form action="#" method="POST">
        <div class="title">
            Update Application
        </div>
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" value="<?php echo $row['Full_Name']; ?>"
                class="input" name="fullName" required>
            </div>
            <div class="input_field">
                <label>Mobile No</label>
                <input type="number" value="<?php echo $row['Mobile_No']; ?>"
                class="input" name="Mnumber" required>
            </div>
            <div class="input_field">
                <label>Email</label>
                <input type="text" value="<?php echo $row['Email']; ?>"
                class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Text Area</label>
                <textarea class="textarea" name="textArea">
                    <?php echo $row['Text_Area']; ?>
                </textarea>
            </div>
            <div class ="input_field">
                <input type="submit" value="Update" class="btn" name="update">
            </div>
        </div>
    </form>
   </div>
</body>
</html>

<?php
if(isset($_POST["update"])) {
    $fullname = $_POST["fullName"];
    $Mnumber = $_POST["Mnumber"];
    $email = $_POST["email"];
    $textArea = $_POST["textArea"];

    $query = "UPDATE respondtable SET Full_Name = '$fullname', Mobile_No = '$Mnumber', Email = '$email', Text_Area = '$textArea' WHERE id = $id";
    $data = mysqli_query($connection, $query);

    if($data) {
        echo "<script> alert ('Data updated')</script>";
        ?>
        <meta http-equiv="refresh" content="1; url=http://localhost/vplakProject/server.php" />
        <?php
    } else {
        echo "Failed to update data: " . mysqli_error($connection);
    }
}
?>