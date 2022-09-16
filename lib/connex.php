<?php

$hostname = "localhost";
$dbname = "TP2Forum";
$username="root";
$password="";
$port=3306;

$con = mysqli_connect($hostname, $username, $password, $dbname, $port);

if(!$con){
    die("Error connection ".mysqli_connect_error());
}

mysqli_set_charset($con,"utf8");

?>