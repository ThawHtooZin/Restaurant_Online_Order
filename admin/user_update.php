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
    if(empty($_POST['username']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['password']) || empty($_POST['address'])){
      if(empty($_POST['username'])){
        $usererror = true;
      }
      if(empty($_POST['firstname'])){
        $firstnameerror = true;
      }
      if(empty($_POST['lastname'])){
        $lastnameerror = true;
      }
      if(empty($_POST['email'])){
        $emailerror = true;
      }
      if(empty($_POST['phonenumber'])){
        $phoneerror = true;
      }
      if(empty($_POST['password'])){
        $passerror = true;
      }
      if(empty($_POST['address'])){
        $addresserror = true;
      }
    }else{
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $id = $_GET['id'];
        $stmt = $pdo->prepare("UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber', password='$password', address='$address' WHERE id=$id");
        $data = $stmt->execute();
        if($data){
          echo "<script>alert('Account created successfully!'); window.location.href='index.php';</script>";
        }else{
          echo "<script>alert('Sorry, there was an error!'); window.location.href='index.php';</script>";
        }

    }
  }
  $stmt = $pdo->prepare("SELECT * FROM users");
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
          <h3 class="card-title">User Update Page</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
          <form action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control <?php if($usererror === true){echo 'is-invalid';} ?>" placeholder="Enter username" name="username" value="<?php echo $data['username']; ?>">
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Fistname</label>
                    <input type="text" class="form-control <?php if($firstnameerror === true){echo 'is-invalid';} ?>" placeholder="Enter firstname" name="firstname" value="<?php echo $data['firstname']; ?>">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" class="form-control <?php if($lastnameerror === true){echo 'is-invalid';} ?>" placeholder="Enter lastname" name="lastname" value="<?php echo $data['lastname']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control <?php if($emailerror === true){echo 'is-invalid';} ?>" placeholder="Enter email" name="email" value="<?php echo $data['email'] ?>">
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="number" class="form-control <?php if($phoneerror === true){echo 'is-invalid';} ?>" placeholder="Enter phone number" name="phonenumber" value="<?php echo $data['phonenumber']; ?>">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control <?php if($passerror === true){echo 'is-invalid';} ?>" placeholder="Enter password" name="password" value="<?php echo $data['password']; ?>">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control <?php if($addresserror === true){echo 'is-invalid';} ?>" rows="3" placeholder="Enter address" name="address"><?php echo $data['address']; ?></textarea>
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
