<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass1 = $_POST['password'];
  $pass2 = $_POST['password2'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];

  require_once "dbh_inc.php";
  require_once "functions.php";

  if (passMismatch($pass1,$pass2) !== False) {
    header("location: ../signup.php?error=passwordMismatch");
    exit();
  }
  if (emailExist($conn,$email) !== False) {
    header("location: ../signup.php?error=emailExist");
    exit();
  }
  createUser($conn,$name,$email,$pass1,$phone,$gender,$state);
}

else {
  header("location: ../signup.php");
  exit();
}
