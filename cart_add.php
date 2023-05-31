<?php
session_start();
include 'config/connect.php';
$food_name = $_POST['food_name'];
$food_quantity = $_POST['food_quantity'];
$food_id = $_POST['food_id'];
$res_name = $_POST['res_name'];
$stmt4 = $pdo->prepare("INSERT INTO cart(food_name, food_quantity, food_id) VALUES(:food_name, :food_quantity, :food_id)");
$stmt4->execute(
  array(":food_name"=>$food_name, ":food_quantity"=>$food_quantity, ":food_id"=>$food_id)
);
header('location:dishes.php?res_name='.$res_name.'');
?>
