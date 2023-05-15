<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style media="screen">
    .bg-image{
      background-image: url('images/background.jpg');
      background-size: cover;
      padding-bottom: 150px;
    }
    .pt-10{
      padding-top: 100px;
    }
  </style>
  <body>
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ps-5 pe-5 transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Foodie..</a>
        <div class="float-end">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="restaurant.php">Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signin.php">Signin</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar ends -->
    <!-- First Container Intro -->
    <div class="bg-image text-light">
      <h1 class="text-center pt-10">Restaurant Website</h1>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
      <form class="text-center" action="index.php" method="post">
        <input type="text" name="search" placeholder="Search" class="form-control d-inline" style="width:20%;">
        <button type="submit" class="btn btn-success">Search</button>
      </form>
    </div>
    <!-- Fist Container Intro Ends -->
    <!-- secnd container best seller -->
    <div class="container mt-4 mb-5">
      <h1 class="text-center">Best Seller</h1>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur.</p>
      <!-- cards -->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <img src="images/fish meal.jpg" alt="" width="100%">
            </div>
            <div class="card-body">
              <p>Rating : 4.5stars</p>
              <h5>Fish Meal</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <div class="row">
                <div class="col">
                  <p>$14.4</p>
                </div>
                <div class="col">
                  <a href="order.php" class="btn btn-success">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">
              <img src="images/chicken meal.jpg" alt="" width="100%">
            </div>
            <div class="card-body">
              <p>Rating : 4.5stars</p>
              <h5>Checken Meal</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <div class="row">
                <div class="col">
                  <p>$14.4</p>
                </div>
                <div class="col">
                  <a href="order.php" class="btn btn-success">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">
              <img src="images/pizza.jpg" alt="" width="100%">
            </div>
            <div class="card-body">
              <p>Rating : 4.5stars</p>
              <h5>Pizza</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <div class="row">
                <div class="col">
                  <p>$14.4</p>
                </div>
                <div class="col">
                  <a href="order.php" class="btn btn-success">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- cards ends -->
    </div>
    <!-- second container ends -->
    <!-- third container About -->
    <div class="container pt-5 pb-5">
      <h1 class="text-center">About Our Services</h1>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      <div class="row">
        <div class="col">
          <img src="images/chicken meal.jpg" alt="" width="100%">
        </div>
        <div class="col">
          <img src="images/chicken meal.jpg" alt="" width="49%" style="display:inline;">
          <img src="images/chicken meal.jpg" alt="" width="49%" style="display:inline;">
          <img src="images/chicken meal.jpg" alt="" width="49%">
          <img src="images/chicken meal.jpg" alt="" width="49%">
        </div>
      </div>
    </div>
    <!-- third container ends -->
    <!-- Firth Container Restaurant -->
    
    <!-- Firth Container Ends -->
  </body>
</html>
