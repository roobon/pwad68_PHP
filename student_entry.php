<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Student Entry</h3>
    <?php 
    if(isset($_POST['submit'])):
        extract($_POST);

        $sql = "INSERT INTO students  VALUES (NULL, '$fname', '$lname', '$dob', '$notes')";
        include_once("db_config.php"); 
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
        $db->close();
    endif; 
    ?>

    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter First Name"><br>
        <input type="text" name="lname" placeholder="Enter Last Name"><br>
        <input type="date" name="dob" placeholder="Enter Date"><br>
        <textarea name="notes" placeholder="Enter Notes"></textarea><br>
        <input type="submit" name="submit" value="SUBMiT">
    </form>
    <br><br>
    <a href="students.php">Student List</a>
    
</body>
</html>