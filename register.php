<?php
session_start();
require 'config/connect.php';
if(empty($_SESSION['username']) && empty($_SESSION['logged_in'])){
  header("location: login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style media="screen">
    label{
      font-weight: 500;
    }
  </style>
  <body>
    <?php
    include 'navbar.php';
    ?>
    <?php
    if($_POST){
      if(empty($_POST['username']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['password']) || empty($_POST['repassword']) || empty($_POST['address'])){
        if(empty($_POST['username'])){
          $usererror = "The Username field is required";
        }
        if(empty($_POST['firstname'])){
          $fusererror = "The First Name field is required";
        }
        if(empty($_POST['lastname'])){
          $lusererror = "The Last Name field is required";
        }
        if(empty($_POST['email'])){
          $emailerror = "The Email field is required";
        }
        if(empty($_POST['phonenumber'])){
          $pherror = "The Phone Number field is required";
        }
        if(empty($_POST['password'])){
          $passerror = "The Password field is required";
        }
        if(empty($_POST['repassword'])){
          $repasserror = "The Repeat Password field is required";
        }
        if(empty($_POST['address'])){
          $addresserror = "The Address field is required";
        }
      }else{
        if($_POST['password'] == $_POST['repassword']){
          $username = $_POST['username'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phonenumber = $_POST['phonenumber'];
          $password = $_POST['password'];
          $address = $_POST['address'];
          $stmt = $pdo->prepare("INSERT INTO users(username, firstname, lastname, email, phonenumber, password, address) VALUES('$username', '$firstname', '$lastname', '$email', '$phonenumber', '$password', '$address')");
          $data = $stmt->execute();
          if($data){
            echo "<script>alert('Account created successfully!'); window.location.href='login.php';</script>";
          }else{
            echo "<script>alert('Sorry, there was an error!'); window.location.href='index.php';</script>";
          }
        }else{
            echo "<script>alert('Enter the repeat password correctly.');</script>";
        }

      }
    }
    ?>
    <div class="container pt-5">
      <hr>
      <div class="row">
        <div class="col-8">
          <form class="form-control p-4" style="background:#eee;" action="register.php" method="post">
            <label>User-Name</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="text-danger"><?php if(!empty($usererror)){ echo $usererror; } ?></span>
            <div class="row">
              <div class="col">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                <span class="text-danger"><?php if(!empty($fusererror)){ echo $fusererror; } ?></span>
              </div>
              <div class="col">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                <span class="text-danger"><?php if(!empty($lusererror)){ echo $lusererror; } ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="text-danger"><?php if(!empty($emailerror)){ echo $emailerror; } ?></span>
              </div>
              <div class="col">
                <label>Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number">
                <span class="text-danger"><?php if(!empty($pherror)){ echo $pherror; } ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="text-danger"><?php if(!empty($passerror)){ echo $passerror; } ?></span>
              </div>
              <div class="col">
                <label>Repeat Password</label>
                <input type="password" name="repassword" class="form-control" placeholder="Repeat Password">
                <span class="text-danger"><?php if(!empty($repasserror)){ echo $repasserror; } ?></span>
              </div>
            </div>
            <label>Delivary Address</label>
            <textarea name="address" rows="5" cols="80" class="form-control"></textarea>
            <span class="text-danger"><?php if(!empty($addresserror)){ echo $addresserror; } ?></span>
            <br>
            <button type="submit" class="btn btn-success btn-lg">submit</button>
          </form>
        </div>
        <div class="col-4">
          <h2>Registering is easy, fast and free.</h2>
          <p>Once registered you can :</p>
          <img src="images/woman.jpg" alt="">
          <div class="form-control">
            You can get our best customer services and discounts.
          </div>
          <h3>Contact us if there is an problem</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </body>
</html>
