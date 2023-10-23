<?php include("connect.php");?>

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
            Application Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" class="input" name="fullName" required>
            </div>
            <div class="input_field">
                <label>Mobile No</label>
                <input type="number" class="input" name="Mnumber" required>
            </div>
            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Text Area</label>
                <textarea class="textarea" name="textArea"></textarea>
            </div>
            <div class ="input_field">
                <input type="submit" value="Submit" class="btn" name="submit" >
            </div>

        </div>
    </form>
   </div>
</body>
</html>


<?php
    if($_POST["submit"])
    {
        $fullname = $_POST["fullName"];
        $Mnumber = $_POST["Mnumber"];
        $email = $_POST["email"];
        $textArea = $_POST["textArea"];
    
        // Capture the current timestamp in the correct format
        $timestamp = date("Y-m-d H:i:s");
    
        $query = "INSERT INTO respondtable (Full_Name, Mobile_No, Email, Text_Area, Timestamp) 
        VALUES ('$fullname', '$Mnumber', '$email', '$textArea', '$timestamp')";
        
        $data = mysqli_query($connection, $query);
    
        if ($data) {
            // Data inserted successfully
            //echo "Data inserted with timestamp: $timestamp";
         ?>
        <meta http-equiv="refresh" content="1; url=http://localhost/vplakProject/server.php" />
        <?php
        } else {
            echo "Failed to insert data: " . mysqli_error($connection);
        }
    }
?>