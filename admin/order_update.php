<?php
session_start();
include 'config/config.php';
include 'config/connect.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="hold-transition sidebar-mini">
  <?php
  if($_POST){
    if(empty($_POST['customer_name']) || empty($_POST['order_date']) || empty($_POST['quantity'])){
      if(empty($_POST['customer_name'])){
        $usererror = true;
      }
      if(empty($_POST['order_date'])){
        $order_daterror = true;
      }
      if(empty($_POST['quantity'])){
        $quantityerror = true;
      }
    }else{
        $customer_name = $_POST['customer_name'];
        $order_date = $_POST['order_date'];
        $quantity = $_POST['quantity'];
        $id = $_GET['id'];
        $stmt = $pdo->prepare("UPDATE users_orders SET customer_name='$customer_name', order_date='$order_date', quantity='$quantity' WHERE id=$id");
        $data = $stmt->execute();
        if($data){
          echo "<script>alert('Order Updated successfully!'); window.location.href='order_admin.php';</script>";
        }else{
          echo "<script>alert('Sorry, there was an error!'); window.location.href='order_admin.php';</script>";
        }

    }
  }
  $stmt = $pdo->prepare("SELECT * FROM users_orders");
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php
  include 'sidebar.php';
  ?>

`  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Order Update Page</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
          <form action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="">Customer Name</label>
                <input type="text" class="form-control <?php if($usererror === true){echo 'is-invalid';} ?>" placeholder="Enter Customer Name" name="customer_name" value="<?php echo $data['customer_name']; ?>">
              </div>
              <div class="form-group">
                <label for="">Order Date</label>
                <input type="date" class="form-control <?php if($order_daterror === true){echo 'is-invalid';} ?>" name="order_date" value="<?php echo $data['order_date']; ?>">
              </div>
              <div class="form-group">
                <label for="">Dish Name</label>
                 <select class="form-control" name="dishes">
                   <?php
                   $stmt = $pdo->prepare("SELECT * FROM users_orders");
                   $stmt->execute();
                   $datas = $stmt->fetchall();
                    foreach ($datas as $data):
                      ?>
                     <option value="<?php echo $data['dishes'] ?>"><?php echo $data['dishes']; ?></option>
                   <?php endforeach; ?>
                 </select>
              </div>
              <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" class="form-control <?php if($quantityerror === true){echo 'is-invalid';} ?>" placeholder="Enter Quantity" name="quantity" value="<?php echo $data['quantity'] ?>">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
      </div>
    </div>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <a href="logout.php" class="btn btn-default">Logout</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
