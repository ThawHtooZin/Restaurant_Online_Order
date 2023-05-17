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
    <div class="container pt-5">
      <hr>
      <div class="row">
        <div class="col-8">
          <form class="form-control p-4" style="background:#eee;" action="register.php" method="post">
            <label>User-Name</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="row">
              <div class="col">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
              </div>
              <div class="col">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="col">
                <label>Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="col">
                <label>Repeat Password</label>
                <input type="password" name="repassword" class="form-control" placeholder="Repeat Password">
              </div>
            </div>
            <label>Delivary Address</label>
            <textarea name="address" rows="5" cols="80" class="form-control"></textarea>
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
