<?php
session_start();
if(empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])){
  header("location: login.php");
}
if($_SESSION['role'] != 1){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <a href="logout.php">Logout</a>
  </body>
</html>
