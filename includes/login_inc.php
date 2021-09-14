<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  require_once "dbh_inc.php";
  require_once "functions.php";

  loginUser($conn,$email,$pass);

}
else {
  header("location: ../login.php");
  exit();
}
