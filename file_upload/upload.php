<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload using PHP Procedural Coding</h3>
    <?php 
        if(isset($_POST['upload'])){
            $filename = $_FILES['myfile']['name'];
            $destination = "files/" . $filename;
            $tempFile = $_FILES['myfile']['tmp_name'];
            $FileSize = $_FILES['myfile']['size']; // Byte
            $maxSize = 576; //0.5MB

            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $allowedTypes = ["jpg", "jpeg", "png"];
            $errors = array();

            if($FileSize>$maxSize){
                $errors[] = "<h1>File is too large</h1>";
            }
            if(!in_array($ext, $allowedTypes)){
                 $errors[] = "<h1>Jpg, png and jpeg is allowed</h1>";
            }
             //print_r($errors);
            if(count($errors)>0){
                foreach($errors as $error){
                    echo $error . "<br>";
                }
            } else {
            
                move_uploaded_file($tempFile, $destination);
                echo "<h1>Uploaded Successfully</h1>";
            }
            
        }
       

    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>
</html>