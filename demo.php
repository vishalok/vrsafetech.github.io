<?php
$ser="localhost";
$user="root";
$pass="";
$db="hello";

$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
echo "Connection success";
?>