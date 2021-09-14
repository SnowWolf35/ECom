<?php
  require_once "includes/header.php";
?>

<section class="login">
  <form class="login" action="includes/login_inc.php" method="post">
    <div class="container-fluid">
      <h2>Login</h2><br><br>
    </div>
    <!-- content -->
    <div class="container-fluid">
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i> </span>
        <input id="input" type="email" name="email" class="form-control" placeholder="Email" required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
        <input type="password" id="input" name="password" class="form-control" placeholder="Password" required>
      </div><br><br>

      <div class="input-group">
        <button type="submit" class="btn btn-success" name="submit">Login <i class="glyphicon glyphicon-log-in"></i></button>&nbsp &nbsp
        <a href="signup.php" class="btn btn-primary">SignUp <i class="glyphicon glyphicon-chevron-right"></i></a>
      </div><br>

    </div>
  </form>
  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "EmailNotExist") {
      echo '<script type="text/javascript">
        alert("User does not Exist!")
      </script>';
    }
    else if ($_GET["error"] == "WrongPassword") {
      echo '<script type="text/javascript">
        alert("Wrong Password!")
      </script>';
    }
  }
  ?>
</section>

<?php
  require_once "includes/footer.php";
?>
