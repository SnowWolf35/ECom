<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      #input{
        width: 500px;
      }
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" >OnlineFoodOrder</a>
      </div>
      <ul class="nav navbar-nav">
        <?php
          if (isset($_SESSION["userId"])) {
            echo "<li> <a href='#'>Inventory</a> </li>";
            echo "<li> <a href='#'>Cart</a> </li>";
            echo "<li> <a href='profile.php'>Profile</a> </li>";
            echo "<li> <a href='includes/logout_inc.php'>Logout</a> </li>";
            echo "<li> <a href='aboutus.php'>About Us</a> </li>";
          }
          else {
            echo "<li> <a href='login.php'>Login</a> </li>";
            echo "<li> <a href='signup.php'>Sign Up</a> </li>";
            echo "<li> <a href='aboutus.php'>About Us</a> </li>";
          }
        ?>
      </ul>
    </div>
