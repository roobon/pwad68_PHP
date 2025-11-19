<?php include_once("db_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Edit</h3>
    <?php 
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM students WHERE employeeID='$id'";
    $rawData = $db->query($sql);
    //print_r($rawData);
    $row = $rawData->fetch_object();
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);
        $sql = "UPDATE students SET first_name='$fname', last_name='$lname', birthdate='$dob', notes='$notes' WHERE employeeID='$id'";

        $db->query($sql);
        header("Location:index.php");

    }


    
    ?>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter First Name" value="<?php echo $row->first_name; ?>"><br>
        <input type="text" name="lname" value="<?php echo $row->last_name; ?>" placeholder="Enter Last Name"><br>
        <input type="date" name="dob" value="<?php echo $row->birthdate; ?>" placeholder="Enter Date"><br>
        <textarea name="notes" placeholder="Enter Notes"><?php echo $row->notes; ?></textarea><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="UPDATE">
    </form>
    
</body>
</html>