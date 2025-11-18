<?php 

class Fruit {
    public $name;
    public $color;

}

$fruitObj = new Fruit;
$fruitObj->name = "Mango";
$fruitObj->color = "Red";

$fruitObj2 = new Fruit;
$fruitObj2->name = "Jackfruit";
$fruitObj2->color = "Yellow";

 var_dump($fruitObj2);

?>