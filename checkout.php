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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style media="screen">
    span{
      background: gray;
      padding: 5px;
    }
    .now{
      background: red;
    }
  </style>
  <body>
    <?php
    include 'navbar.php';
    ?>
    <!-- First Container Intro -->
    <div class="bg-image text-light">
      <div class="ps-5 pe-5 pt-2 bg-secondary">
        <div class="row">
          <div class="col">
            <h3><span>1</span> Choose Restaurant</h3>
          </div>
          <div class="col">
            <h3><span>2</span> Pick Your Favorite Food</h3>
          </div>
          <div class="col">
            <h3><span class="now">3</span> Order And Pay Online</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Fist Container Intro Ends -->
    <hr>
    <!-- Second Container -->
    <?php
    $stmt1 = $pdo->prepare("SELECT * FROM cart");
    $stmt1->execute();
    $datas = $stmt1->fetch(PDO::FETCH_ASSOC);
    $food_id = $datas['food_id'];
    $stmt = $pdo->prepare("SELECT * FROM dishes WHERE id=$food_id");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $res_name = $_SESSION['res_name'];
    $cartdatas = $pdo->prepare("SELECT * FROM cart");
    $cartdatas->execute();
    $cartdata = $cartdatas->fetchall();
    $i = 0;
    foreach ($cartdata as $cartdatas) {
      $food_id = $cartdatas['food_id'];
      $stmt = $pdo->prepare("SELECT * FROM dishes WHERE id=$food_id");
      $stmt->execute();
      $prices = $stmt->fetch(PDO::FETCH_ASSOC);
      if($i == 0){
        $price = $prices['price'];
        $totalprice = $price * $cartdatas['food_quantity'];
      }else{
          $price = $prices['price'];
          $totalprice = $totalprice + $price * $cartdatas['food_quantity'];
      }
      $i++;
    }


    if($_POST){
      $cartdatas = $pdo->prepare("SELECT * FROM cart");
      $cartdatas->execute();
      $cartdata = $cartdatas->fetchall();
      foreach ($cartdata as $cartdatas) {
        $food_id = $cartdatas['food_id'];
        $stmt = $pdo->prepare("SELECT * FROM dishes WHERE id=$food_id");
        $stmt->execute();
        $dishdata = $stmt->fetch(PDO::FETCH_ASSOC);
        // INSERT DATAS
        $customer_name = $_SESSION['username'];
        $dishes = $cartdatas['food_name'];
        $price = $dishdata['price'];
        $quantity = $cartdatas['food_quantity'];
        $status = "ordered";
        $stmtinert = $pdo->prepare("INSERT INTO users_orders(customer_name, dishes, price, quantity, status) VALUES(:customer_name ,:dishes ,:price ,:quantity ,:status)");
        $stmtinert->execute(
          array(":customer_name"=>$customer_name, ":dishes"=>$dishes, ":price"=>$price, ":quantity"=>$quantity, ":status"=>$status)
        );
      }
      $stmtdelete = $pdo->prepare('DELETE FROM cart');
      $stmtdelete->execute();
      echo "<script>alert('order submitted successfully!'); window.location.href-'index.php'</script>";
    }

    ?>
    <div class="container form-control mt-5">
      <form action="checkout.php" method="post">
        <h3>Cart Summary</h3>
        <hr>
        <div class="row">
          <div class="col">
            <p>Cart SubTotal</p>
          </div>
          <div class="col">
            <p><?php echo $totalprice; ?>ks</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col">
            <p>Shipping & Handing</p>
          </div>
          <div class="col">
            <p>shipping free</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col">
            <p>Total</p>
          </div>
          <div class="col">
            <p><?php echo $totalprice; ?>ks</p>
          </div>
        </div>
        <hr>
        <input type="radio" name="paymentsystem" value="paydelivered" checked><p class="h5 d-inline">Payment on delivary</p>
        <br>
        <input type="radio" name="paymentsystem" value="paypal"><p class="h5 d-inline">PayPal</p>
        <hr>
        <div class="row">
          <button type="submit" class="btn btn-success">Order Now</button>
        </div>
      </form>
    </div>
    <!-- Second Container ends -->
  </body>
</html>
