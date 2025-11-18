<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial output</h3>
    <?php 
        if(isset($_REQUEST['submit'])){
            $mynum = $_REQUEST['mynum']; //3
            
            $output = 1;
            for($i = 1; $i<=$mynum;  $i++){
                $output *= $i;
            }
           echo $output;
        }
    ?>

    <form action="">
        <input type="number" name="mynum" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>