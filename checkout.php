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
    <div class="container form-control mt-5">

    </div>
    <!-- Second Container ends -->
  </body>
</html>
