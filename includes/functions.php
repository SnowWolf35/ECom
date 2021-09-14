<?php

function passMismatch($pass1,$pass2){
  $result;

  if($pass1 !== $pass2){
    $result=True;
  }
  else {
    $result=False;
  }
  return $result;
}
function emailExist($conn,$email){

  $sql = "SELECT * FROM users WHERE u_email=?;";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);

}
function createUser($conn,$name,$email,$pass1,$phone,$gender,$state){
  $sql = "INSERT INTO users (u_name,u_email,u_password,u_gender,u_phone,u_state) VALUES (?,?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }
  $hashPass = password_hash($pass1,PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt,"ssssss",$name,$email,$hashPass,$phone,$gender,$state);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();
}

function loginUser($conn,$email,$pass){
  $userExist = emailExist($conn,$email);
  if ($userExist === false) {
    header("location: ../login.php?error=EmailNotExist");
    exit();
  }
  $passHash = $userExist["u_password"];
  $chkPass = password_verify($pass,$passHash);

  if ($chkPass === false) {
    header("location: ../login.php?error=WrongPassword");
    exit();
  }
  else if ($chkPass === true) {
    session_start();
    $_SESSION["userId"] = $userExist['u_id'];
    $_SESSION["userName"] = $userExist['u_name'];
    header("location: ../home.php");
    exit();
  }
}
