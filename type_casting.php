<?php 
   $number =  (double) 55;

   echo $number. "<br>";

   var_dump($number);

?>

<hr>

<?php 
   $number =  (int) 55.6;

   echo $number. "<br>";

   var_dump($number);

?>
<hr>
<?php 
   $number =  (int) "Today is Saturday";

   echo $number. "<br>";

   echo gettype($number);

?>
<hr>
<?php
   $txt = (bool) 80;
   echo $txt . "<br>";
   echo gettype($txt);

?>
<hr>
<?php 
   $array = (array) "Hello";
   echo $array[0]. "<br>";
    //echo $array[1]. "<br>";
   echo gettype($array);

?>