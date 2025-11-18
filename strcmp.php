 <?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";

//echo strcmp($pswd, $pswd2);

 if (strcmp($pswd, $pswd2) == -1) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
 ?>