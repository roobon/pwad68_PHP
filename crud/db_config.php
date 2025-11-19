<?php

$host = "localhost";
$user =  "root";
$password = "";
$database = "pwad68";

$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";


//$db->close();
