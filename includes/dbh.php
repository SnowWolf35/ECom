<?php
$serverName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="ECom";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
  die("Connection to database failed: ".mysqli_connnect_error());
}

 ?>
