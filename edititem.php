<?php
  require_once "includes/header.php";
?>
<div class="title">
  <hr>
  <h2 class="">&nbsp &nbsp Add Item</h2>
  <hr>
</div>
<!-- header -->
<section class="additem">
  <form action="includes/edititem_inc.php" method="post">
    <!-- content -->
    <div class="container-fluid">
      <div class="input-group">
        <input type="text" id="input" name="name" class="form-control" placeholder="Product Name" required>
      </div><br>
      <div class="input-group">
        <input type="text" id="input" name="price" class="form-control" placeholder="Product Price" required>
      </div><br>
      <div class="input-group">
        <select id="input" class="form-control" name="category" required>
          <option value="" selected>Select Category</option>
          <option value="pizza">Pizza</option>
          <option value="burger">Burger</option>
          <option value="sandwich">Sandwich</option>
          <option value="fullmeal">Fullmeal</option>
          <option value="frenchfries">FrenchFries</option>
          <option value="cooldrinks">CoolDrinks</option>
        </select>
      </div><br>

      <div class="input-group">
        <?php
          if (isset($_POST['delete'])) {
            echo "<button type='submit' class='btn btn-primary' name='add' disabled> Add </button>";
          }
          else {
            echo "<button type='submit' class='btn btn-primary' name='add'> Add </button>";
          }
        ?>
      </div><br>
    </div>
  </form>
</section>
<!-- remove -->
<div class="title">
  <hr>
  <h2 class="">&nbsp &nbsp Delete Item</h2>
  <hr>
</div>
<!-- header -->
<section class="additem">
  <form action="includes/edititem_inc.php" method="post">
    <!-- content -->
    <div class="container-fluid">
      <div class="input-group">
        <input type="text" id="input" name="name" class="form-control" placeholder="Product Name" required>
      </div><br>
      <div class="input-group">
        <select id="input" class="form-control" name="category" required>
          <option value="" selected>Select Category</option>
          <option value="pizza">Pizza</option>
          <option value="burger">Burger</option>
          <option value="sandwich">Sandwich</option>
          <option value="fullmeal">Fullmeal</option>
          <option value="frenchfries">FrenchFries</option>
          <option value="cooldrinks">CoolDrinks</option>
        </select>
      </div><br>

      <div class="input-group">
        <?php
          if (isset($_POST['add'])) {
            echo "<button type='submit' class='btn btn-danger' name='delete' disabled> Remove </button>";
          }
          else {
            echo "<button type='submit' class='btn btn-danger' name='delete'> Remove </button>";
          }
        ?>
      </div><br>
    </div>
  </form>
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "stmtFailed") {
        echo '<script type="text/javascript">
          alert("Database Connection Error!")
        </script>';
      }
      else if ($_GET["error"] == "added") {
        echo '<script type="text/javascript">
          alert("Added Item Successfully!")
        </script>';
      }
      else if ($_GET["error"] == "deleted") {
        echo '<script type="text/javascript">
          alert("Deleted Item Successfully!")
        </script>';
      }
    }
   ?>
</section>
<?php
  require_once "includes/footer.php";
?>
