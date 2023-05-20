<!-- Navbar Starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success ps-5 pe-5 transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Foodie..</a>
    <div class="float-end">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="restaurant.php">Restaurant</a>
          </li>
          <?php
          if(empty($_SESSION['logged_in'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <?php
          }else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><?php echo $_SESSION['username']; ?></a>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar ends -->
