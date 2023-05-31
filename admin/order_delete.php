<?php
  include 'config/connect.php';
  $id = $_GET['id'];
  $stmt = $pdo->prepare("DELETE FROM users_orders WHERE id=$id");
  $stmt->execute();

  echo "<script>alert('Data Deleted successfully'); window.location.href='order_admin.php';</script>";
?>
