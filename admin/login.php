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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style media="screen">
  </style>
  <body style="background: #ddd;">
    <?php
    if($_POST){
      if(empty($_POST['username']) || empty($_POST['password'])){
        if(empty($_POST['username'])){
          $usererror = "The Username field is required";
        }
        if(empty($_POST['password'])){
          $passerror = "The Password field is required";
        }
      }else{
        $username = $_POST['username'];
        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username='$username'");
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data['password'] == $_POST['password']){
          echo "<script>window.location.href='Index.php';</script>";
          $_SESSION['username'] = $data['username'];
          $_SESSION['logged_in'] = true;
          $_SESSION['role'] = 1;
        }
      }
    }
    ?>
    <div class="container mt-5">
      <div class="card w-50 ms-auto me-auto">
        <div class="card-header text-center">
          <i class="bi bi-shield-lock display-1"></i>
          <br>
          <b class="display-4 ">Admin Authrization</b>
        </div>
        <form action="login.php" method="post" autocomplete="off">
          <div class="card-body">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your username">
            <label>Passsword</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password">
          </div>
          <div class="card-footer container ms-auto me-auto row">
            <button type="submit" class="btn btn-success">Login</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
