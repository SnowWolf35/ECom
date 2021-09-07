<?php
  require_once "includes/header.php";
?>
<!-- header -->
<form class="myform" action="login.php" method="post">
  <div class="container-fluid">
    <h2>Sign Up</h2><br><br>
  </div>
  <!-- content -->
  <div class="container-fluid">
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
      <input type="text" id="input" name="name" class="form-control" placeholder="Full Name">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i> </span>
      <input type="email" id="input" name="email" class="form-control" placeholder="Email">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
      <input type="password" id="input" name="password" class="form-control" placeholder="Password">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
      <input type="password" id="input" name="password2" class="form-control" placeholder="Confirm Password">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
      <select id="input" class="form-control" name="gender">
        <option value="" selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-phone"></i> </span>
      <input type="text" id="input" name="phone" class="form-control" placeholder="Phone no">
    </div><br>
    <div class="input-group">
      <span class="input-group-addon"> <i class="glyphicon glyphicon-map-marker"></i> </span>
      <select id="input" class="form-control" name="state">
        <option value="" selected>Select State</option>
        <option value="karnataka">Karnataka</option>
        <option value="tamilnadu">Tamilnadu</option>
        <option value="goa">Goa</option>
      </select>
    </div><br>
    <div class="input-group">
      <button type="button" class="btn btn-primary" name="button">SignUp <i class="glyphicon glyphicon-send"></i></button>
    </div><br>
  </div>
</form>

<?php
  require_once "includes/footer.php";
?>
