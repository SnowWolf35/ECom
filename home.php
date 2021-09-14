<?php
  require_once "includes/header.php";
?>
<?php
  if (isset($_SESSION["userId"])) {

    echo "<div class='usr'>
      <button type='button' class='btn' name='button'>Name: ".$_SESSION["userName"]."</button>
    </div>";
  }
?>


<?php
  require_once "includes/footer.php";
?>
