<?php
include 'config/connect.php';
session_start();
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM cart WHERE food_id=$id");
$stmt->execute();
$res_name = $_SESSION["res_name"];
header('location:dishes.php?res_name='.$res_name.'');

?>
