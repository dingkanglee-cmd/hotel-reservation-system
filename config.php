<?php

$host = "sql102.infinityfree.com";
$username = "if0_41943480";
$password = "4PzhLJvRew";
$database = "if0_41943480_dbkang";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}

?>