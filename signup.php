<?php
  require_once "includes/header.php";
?>
<!-- header -->
<section class="signup">
  <form action="includes/signup_inc.php" method="post">
    <div class="container-fluid">
      <h2>Sign Up</h2><br><br>
    </div>
    <!-- content -->
    <div class="container-fluid">
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
        <input type="text" id="input" name="name" class="form-control" placeholder="Full Name" required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i> </span>
        <input type="email" id="input" name="email" class="form-control" placeholder="Email" required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
        <input type="password" id="input" name="password" class="form-control" placeholder="Password" required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
        <input type="password" id="input" name="password2" class="form-control" placeholder="Confirm Password" required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
        <select id="input" class="form-control" name="gender" required>
          <option value="" selected>Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-phone"></i> </span>
        <input type="text" id="input" name="phone" class="form-control" placeholder="Phone no" maxlength=10 required>
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"> <i class="glyphicon glyphicon-map-marker"></i> </span>
        <select id="input" class="form-control" name="state" required>
          <option value="" selected>Select State</option>
          <option value="karnataka">Karnataka</option>
          <option value="tamilnadu">Tamilnadu</option>
          <option value="goa">Goa</option>
        </select>
      </div><br>
      <div class="input-group">
        <button type="submit" class="btn btn-primary" name="submit">SignUp <i class="glyphicon glyphicon-send"></i></button>
      </div><br>
    </div>
  </form>
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "passwordMismatch") {
        echo '<script type="text/javascript">
          alert("Password Mismatch!")
        </script>';
      }
      else if ($_GET["error"] == "emailExist") {
        echo '<script type="text/javascript">
          alert("Email Already Exists!")
        </script>';
      }
      else if ($_GET["error"] == "none") {
        echo '<script type="text/javascript">
          alert("SignUp Successful!")
        </script>';
      }
    }
   ?>
</section>

<?php
  require_once "includes/footer.php";
?>
