<?php
$serverName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="ecom";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
  die("Connection to database failed: ".mysqli_connnect_error());
}

 ?>
