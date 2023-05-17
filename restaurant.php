<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style media="screen">
    .bg-image{
      background-image: url('images/background2.jpg');
      background-size: cover;
      padding-bottom: 150px;
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
    <?php
    include 'navbar.php';
    ?>
    <!-- First Container Intro -->
    <div class="bg-image text-light">
      <div class="ps-5 pe-5 pt-2 bg-secondary">
        <div class="row">
          <div class="col">
            <h3><span class="now">1</span> Choose Restaurant</h3>
          </div>
          <div class="col">
            <h3><span>2</span> Pick Your Favorite Food</h3>
          </div>
          <div class="col">
            <h3><span>3</span> Order And Pay Online</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Fist Container Intro Ends -->
    <!-- Second Container Restaurants -->
    <div class="container mt-5">
      <div class="row">
        <div class="border boder-5 rounded p-2">
        <!-- row1 -->
        <div class="container">
          <div class="row">
            <div class="col-2">
              <img src="images/restaurant1.jpg" alt="" style="width:100%;">
            </div>
            <div class="col-8">
              <h2>Restaurant 1</h2>
              <p>location: yangon north okkalapa</p>
            </div>
            <div class="col-2">
              <div class="container">
                <h4>Rating</h4>
                <p>5 stars</p>
                <a href="#" class="btn btn-success">View Menu</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row2 -->
        <div class="container">
          <div class="row">
            <div class="col-2">
              <img src="images/restaurant1.jpg" alt="" style="width:100%;">
            </div>
            <div class="col-8">
              <h2>Restaurant 1</h2>
              <p>location: yangon north okkalapa</p>
            </div>
            <div class="col-2">
              <div class="container">
                <h4>Rating</h4>
                <p>5 stars</p>
                <a href="#" class="btn btn-success">View Menu</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row3 -->
        <div class="container">
          <div class="row">
            <div class="col-2">
              <img src="images/restaurant1.jpg" alt="" style="width:100%;">
            </div>
            <div class="col-8">
              <h2>Restaurant 1</h2>
              <p>location: yangon north okkalapa</p>
            </div>
            <div class="col-2">
              <div class="container">
                <h4>Rating</h4>
                <p>5 stars</p>
                <a href="#" class="btn btn-success">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
