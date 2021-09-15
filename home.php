<?php
  require_once "includes/header.php";
?>
<?php
  if (isset($_SESSION["userId"])) {
    if ($_SESSION["userName"] === "SYS_ADMIN") {
      echo "<div class='usr'>
        <button type='button' class='btn btn-danger' name='button'>Name: ".$_SESSION["userName"]."</button>
      </div>";
    }
    else {
      echo "<div class='usr'>
        <button type='button' class='btn btn-primary' name='button'>Name: ".$_SESSION["userName"]."</button>
      </div>";
    }
  }
?>
<section>
  <hr>
  <div class="category">
    <h2 class="text-center">Category</h2>
  </div>
  <hr>
  <br>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="products.php"><img src="images/pizza.jpg" class="img-rounded"  alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            Pizza
          </div>
        </div>
        <div class="col-sm-4">
          <a href="products.php"><img src="images/burger.jpg" class="img-rounded" alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            Burger
          </div>
        </div>
        <div class="col-sm-4">
          <a href="products.php"><img src="images/sandwich.jpg" class="img-rounded" alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            Sandwich
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a href="products.php"><img src="images/fullmeal.jpg" class="img-rounded" alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            Fullmeal
          </div>
        </div>
        <div class="col-sm-4">
          <a href="products.php"><img src="images/frencfries.jpg" class="img-rounded" alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            FrenchFries
          </div>
        </div>
        <div class="col-sm-4">
          <a href="products.php"><img src="images/cooldrinks.png" class="img-rounded" alt="img not found" style="width:300px;height:200px"></a> <br>
          <div class="caption lead text-center">
            ColdDrinks
          </div>
        </div>
      </div>
    </div>
</section>

<?php
  require_once "includes/footer.php";
?>
