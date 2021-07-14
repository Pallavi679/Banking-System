<?php
$servername="localhost";
$username="root";
$password="";
$database="bank";
$conn= @mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    // ini_set("display_errors", "off");
    require "404.php";
    die();
    error_reporting(0);
}
else{
    // echo"Connected";
}
?>