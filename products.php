<?php
  require_once "includes/header.php"
?>
<form class="addItem" action="edititem.php" method="post">
  <?php
    if (isset($_SESSION["userId"])) {
      if ($_SESSION["userName"] === "SYS_ADMIN") {
        echo "<div class='usr'>
          &nbsp &nbsp <button type='submit' class='btn btn-primary' name='add'>Add Item</button>
          &nbsp &nbsp <button type='submit' class='btn btn-danger' name='delete'>Delete Item</button>
        </div>";
      }
    }
  ?>
</form>

<div class="title">
  <hr>
  <h2 class="text-center">Products</h2>
  <hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/pizza.jpg" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/burger.jpg" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/sandwich.jpg" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/fullmeal.jpg" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/frencfries.jpg" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-6 center-responsive">
      <div class="product">
        <a href="details.php"> <img src="images/cooldrinks.png" class="img-rounded" alt="Not found" style="width:300px;height:200px"> </a>
        <div class="text">
          <h3>Product_name</h3>
          <p class="price">300INR</p>
          <p class="button">
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-success"> <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  require_once "includes/footer.php"
?>
