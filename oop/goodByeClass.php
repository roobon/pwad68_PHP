<?php 
class goodByeClass{

    const MYMSG = "We are learing PHP OOP<br>";
    const MYMSG2 = "We are about Constant using in OOP";

    function Info(){
        echo self::MYMSG2;
    }

} // End of Class

echo goodByeClass::MYMSG;

$obj1 = new goodByeClass;
$obj1->Info();



?>