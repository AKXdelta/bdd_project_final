<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = [
    'name' => $_POST['name'],
    'price' => (float) $_POST['price'],
    'image' => $_POST['image'],
    'quantity' => 1
];

header("Location: cart.php");
exit;

