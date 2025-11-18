<?php 
  $fh =  fopen("student1.txt", "a");
 


fwrite($fh, "Hello Anisur, How are you today?\n");

$fh =  fopen("student1.txt", "r");
while(!feof($fh)){
    echo  fgets($fh) . "<br>";
}
fclose($fh);

?>