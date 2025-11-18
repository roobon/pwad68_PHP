<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<?php 
    $sql = "SELECT * FROM students ORDER BY employeeID desc";
    $result = $db->query($sql);
?>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
        </tr>
        <?php 
             while($row1 = $result->fetch_object()){
        ?>
        <tr>
            <td><?php echo $row1->employeeID ?></td>
            <td><?php  echo  $row1->first_name; ?></td>
            <td><?php  echo $row1->last_name; ?></td>
            <td><?php  echo $row1->birthdate; ?></td>
        </tr>
        <?php } ;
        $db->close();
        ?>
    </table>  
    
       <br><br>
    <a href="student_entry.php">Student Entry</a>
</body>
</html>