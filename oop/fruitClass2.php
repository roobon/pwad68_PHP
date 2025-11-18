<?php 
class fruitClass2{
    public $name;
    public $color;

    function __construct($name){
        echo  "Hello " . $name . "<br>" ;
    }

     function __destruct(){
        echo  "Bye Bye ..." ;
    }

}


new fruitClass2("Rahim");

?>