<html>
<head>
    <title>Crud_Operation</title>
    <style>
        body {
            background: aqua;
        }

        table {
            background-color: antiquewhite;
        }

        .update {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor: pointer;
        }

        .delete {
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor: pointer;
        }
    </style>
</head>
</html>

<?php
include("connect.php");

$query = "SELECT * FROM respondtable";
$data = mysqli_query($connection, $query);
$totalRows = mysqli_num_rows($data);

if ($totalRows != 0) {
    ?>
    <h2 align="center"><mark>Crud Operation</mark></h2>
    <table border="2" cellspacing="10" width="100%">
        <tr>
            <th width="5%">id</th>
            <th width="15%">Full_Name</th>
            <th width="15%">Mobile_No</th>
            <th width="15%">Email</th>
            <th width="30%">Text_Area</th>
            <th width="15%">Timestamp</th>
            <th width="5%">Operation</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($data)) {
            echo " <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['Full_Name'] . "</td>
                <td>" . $row['Mobile_No'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['Text_Area'] . "</td>
                <td>" . $row['Timestamp'] . "</td> 
                <td>
                    <a href='update.php?id=$row[id]'><input type='submit' value='Edit' class='update'></a>
                    <a href='delete.php?id=$row[id]'><input type='submit' value='Delete' class='delete'
                        onclick='return checkdelete()'></a>
                </td>
                </tr>
                ";
        }
    } else {
        echo "Table has no records";
    }
    ?>
    </table>

    <script>
        function checkdelete() {
            return confirm('Are You Sure To Delete');
        }
    </script>
