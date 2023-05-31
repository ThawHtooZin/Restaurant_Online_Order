<?php
session_start();
include 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style media="screen">
  .bg-image{
    background-image: url('images/background2.jpg');
    background-size: cover;
    padding-bottom: 80px;
  }
  span{
    background: gray;
    padding: 5px;
  }
  .now{
    background: red;
  }
  </style>
  <body>
    <?php include 'navbar.php'; ?>
    <!-- First Container Intro -->
    <div class="bg-image text-light">
      <div class="ps-5 pe-5 pt-2 bg-secondary">
        <div class="row">
          <div class="col">
            <h3><span>1</span> Choose Restaurant</h3>
          </div>
          <div class="col">
            <h3><span class="now">2</span> Pick Your Favorite Food</h3>
          </div>
          <div class="col">
            <h3><span>3</span> Order And Pay Online</h3>
          </div>
        </div>
      </div>
      <div class="container pt-5">
        <div class="row">
          <div class="col-1">

          </div>
          <?php
          $res_name = $_GET['res_name'];
          $_SESSION['res_name'] = $res_name;
          $stmt = $pdo->prepare("SELECT * FROM restaurant WHERE name=:res_name");
          $stmt->execute(
            array(':res_name' => $res_name)
          );
          $data = $stmt->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="col-2">
            <img src="images/product_image/<?php echo $data['image']; ?>" alt="" width="100%">
          </div>
          <div class="col-8">
            <h2 class="mt-4"><?php echo $data['name']; ?></h2>
            <p>Location : <?php echo $data['location']; ?></p>
          </div>
          <div class="col-1">

          </div>
        </div>
      </div>
    </div>
    <!-- Fist Container Intro Ends -->
    <!-- Second Container Order Foods -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-3">
          <div class="card">
            <div class="card-header">
              <b>Your Shopping Cart</b>
            </div>
            <div class="card-body">
              <?php
                $stmt = $pdo->prepare("SELECT * FROM cart");
                $stmt->execute();
                $datas = $stmt->fetchall();
                foreach ($datas as $data) {
              ?>

              <!--  -->
              <div class="row">
                <div class="col">
                  <p><?php echo $data['food_name'] ?></p>
                </div>
                <div class="col">
                  <a href="del_cart_item.php?id=<?php echo $data['food_id']; ?>" class="btn btn-danger">Delete</a>
                </div>
              </div>
            <?php
            $dish_name =$data['food_name'];
            $stmt = $pdo->prepare("SELECT * FROM dishes WHERE name=:dishname");
            $stmt->execute(
              array(':dishname' => $dish_name)
            );
            $data2 = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            price:
              <input type="text" name="" value="<?php echo $data['food_quantity'] * $data2['price']; ?>" disabled>
            quantity:
              <input type="text" name="" value="<?php echo $data['food_quantity']; ?>" disabled>
              <hr>
              <!--  -->
              <?php
                }
              ?>
              <a href="checkout.php" class="btn btn-success">checkout</a>
            </div>
          </div>
        </div>
        <div class="col-9">
          <div class="form-control">
            <?php
            $stmt = $pdo->prepare("SELECT * FROM dishes WHERE restaurant=:res_name");
            $stmt->execute(
              array(':res_name' => $res_name)
            );

            $data = $stmt->fetchall();
            foreach ($data as $datas) {
              if(!empty($_POST['quantity'])){$_SESSION['food_quantity'] = $_POST['quantity'];};
              $_SESSION['res_name'] = $_GET['res_name'];
            ?>
            <?php

            ?>
            <!-- row -->
            <div class="row">
              <div class="col-2">
                <img src="images/<?php echo $datas['image']; ?>" alt="" width="100%">
              </div>
              <div class="col-6">
                <b><?php echo $datas['name']; ?></b>
                <p><?php echo $datas['description']; ?></p>
              </div>
              <div class="col-4">
                <p>prize: <?php echo $datas['price']; ?>ks</p>
                <form action="cart_add.php" method="post">
                  <input type="hidden" name="food_id" value="<?php echo $datas['id']; ?>">
                  <input type="hidden" name="food_name" value="<?php echo $datas['name']; ?>">
                  <input type="hidden" name="res_name" value="<?php echo $_GET['res_name']; ?>">
                  <input type="number" name="food_quantity" value="1">
                  <button type="submit" class="btn btn-success">Add To Cart</button>
                </form>
              </div>
            </div>
            <?php
            }
            ?>
            <hr>
            <!-- row ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- Second Container Order Foods Ends -->
  </body>
</html>
