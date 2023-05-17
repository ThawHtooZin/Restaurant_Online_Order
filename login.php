<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style media="screen">
    .card{
      border: none !important;
      margin: 0 auto !important; /* Added */
      float: none !important; /* Added */
      margin-bottom: 10px !important; /* Added */
      margin-top: 20px !important;
    }
    .card-header{
      background: #ddd !important;
    }
    .card-body{
      background: #ddd !important;
      box-shadow: 2px 2px #aaa !important;
    }
  </style>
  <body style="background: #ddd;">
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class="card w-25">
        <div class="card-header">
          <h1 class="display-4">Login Form</h1>
        </div>
        <div class="card-body">
          <b class="text-success h5">Login into your account</b>
          <br><br>
          <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" class="form-control border border-success border-3">
            <br>
            <input type="password" name="password" placeholder="Password" class="form-control border border-success border-3">
            <br>
            <div class="container">
              <div class="row">
                <button type="submit" class="btn btn-success text-center">Login</button>
              </div>
            </div>
          </form>
          <br><br>
        </div>
        <div class="card-footer bg-light">
          <span>Not Registered? </span><a href="register.php" style="color:red; text-decoration:none;">Create an account!</a>
        </div>
      </div>
    </div>
  </body>
</html>
