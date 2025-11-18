<?php 

    $value1 = "Hello World";
    $value2 = & $value1;

    $value2 = "We are using PHP";

    echo $value1;

?>