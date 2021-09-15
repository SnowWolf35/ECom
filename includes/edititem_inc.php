<?php
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category = $_POST['category'];

  require_once "dbh_inc.php";
  require_once "functions.php";

  addItem($conn,$name,$price,$category);
}
else if (isset($_POST['delete'])) {
  $name = $_POST['name'];
  $category = $_POST['category'];

  require_once "dbh_inc.php";
  require_once "functions.php";

  deleteItem($conn,$name,$category);
}

else {
  header("location: ../edititem.php");
  exit();
}
