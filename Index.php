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
    <?php
    include 'navbar.php';
    ?>
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
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col">
          <h1>Featured Restaurants</h1>
        </div>
        <div class="col" style="line-height:50px;">
          <a href="" class="text-secondary ps-2" style="text-decoration:none;">All </a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Grill</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Steak</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Pasta</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Pizza</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Grill</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Steak</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Pasta</a>
          <a href="" class="text-secondary ps-4" style="text-decoration:none;">Pizza</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <img src="images/restaurant1.jpg" alt="" width="100%">
                </div>
                <div class="col-10">
                  <b>Restaurant1</b>
                  <p>Lorem ipsum dolor sit amet,</p>
                  <p>Open 24hours 4.5stars</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <img src="images/restaurant2.jpg" alt="" width="100%">
                </div>
                <div class="col-10">
                  <b>Restaurant2</b>
                  <p>Lorem ipsum dolor sit amet,</p>
                  <p>Open 24hours 4.5stars</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <img src="images/restaurant1.jpg" alt="" width="100%">
                </div>
                <div class="col-10">
                  <b>Restaurant1</b>
                  <p>Lorem ipsum dolor sit amet,</p>
                  <p>Open 24hours 4.5stars</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <img src="images/restaurant2.jpg" alt="" width="100%">
                </div>
                <div class="col-10">
                  <b>Restaurant2</b>
                  <p>Lorem ipsum dolor sit amet,</p>
                  <p>Open 24hours 4.5stars</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Firth Container Ends -->
    <!-- Footer -->
    <div class="bg-dark p-5">
      <div class="row p-5 text-light">
        <div class="col">
          <h3>Restaurants Service Web Application</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col ps-5">
          <h3>Useful Links</h3>
          <ul style="list-style:none;">
            <li><a href="Index.php" class="text-light">Home</a></li>
            <li><a href="restaurant.php" class="text-light">Restaurants</a></li>
            <li><a href="login.php" class="text-light">Login</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>Sent Us A Mail</h3>
          <label>Your Email</label>
          <input type="text" class="form-control" placeholder="your email">
          <label>Your Message</label>
          <textarea rows="4" cols="80" class="form-control" placeholder="your message"></textarea>
          <br>
          <div class="text-center">
            <button type="submit" class="btn btn-light ps-5 pe-5">Sent</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer ends -->
  </body>
</html>
