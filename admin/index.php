<?php
  session_start();
  include 'config/connect.php';
  if(empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])){
    header("location: login.php");
  }
  if($_SESSION['role'] != 1){
    header("location: login.php");
  }
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
  // users
  $userstmt = $pdo->prepare("SELECT * FROM users");
  $userstmt->execute();
  $userdatas = $userstmt->fetchall();
  $userrows = count($userdatas);
  // restaurant
  $restaurantstmt = $pdo->prepare("SELECT * FROM restaurant");
  $restaurantstmt->execute();
  $restaurantdatas = $restaurantstmt->fetchall();
  $restaurantrows = count($restaurantdatas);
  // dishes
  $dishesstmt = $pdo->prepare("SELECT * FROM dishes");
  $dishesstmt->execute();
  $dishesdatas = $dishesstmt->fetchall();
  $dishesrows = count($dishesdatas);
  // order
  $orderstmt = $pdo->prepare("SELECT * FROM users_orders");
  $orderstmt->execute();
  $orderdatas = $orderstmt->fetchall();
  $orderrows = count($orderdatas);
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-9">
                    <h3><?php echo $restaurantrows; ?></h3>
                    <p>Restaurants</p>
                  </div>
                  <div class="col-3">
                    <div style="font-size:50px;">
                      <i class="bi bi-shop"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="restaurant_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <div class="row">
                  <div class="col-9">
                    <h3><?php echo $dishesrows; ?></h3>
                    <p>Dishes</p>
                  </div>
                  <div class="col-3">
                    <div style="font-size:50px;">
                      <i class="bi bi-cup-hot-fill"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="dishes_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <div class="row">
                  <div class="col-9">
                    <h3><?php echo $userrows; ?></h3>
                    <p>User</p>
                  </div>
                  <div class="col-3">
                    <div style="font-size:50px;">
                      <i class="bi bi-person-circle"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="user_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <div class="row">
                  <div class="col-9">
                    <h3><?php echo $orderrows; ?></h3>
                    <p>Order</p>
                  </div>
                  <div class="col-3">
                    <div style="font-size:50px;">
                      <i class="bi bi-card-checklist"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="order_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
