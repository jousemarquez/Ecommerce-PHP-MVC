<?php
session_start();
require_once(__DIR__ . "/../model/model.cart.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = new Cart();
}

$cart = $_SESSION['cart'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $idProduct = $_POST['id_product'];
        $quantity = 1;
        $cart->addItem($idProduct, $quantity);
    } elseif ($_POST['action'] === 'remove') {
        $idProduct = $_POST['id_product'];
        $cart->removeItem($idProduct);
    }
}
