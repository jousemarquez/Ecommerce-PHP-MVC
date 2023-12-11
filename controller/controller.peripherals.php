<?php 

require_once("../dao/dao.products.php");

$resultsPheripherals = getPeripherals($pdo);

$pdo = null;

header("./view/view.products.php");

$listaproducts = [];
function addProductToCart($product){
    array_push($listaproducts, $product);
    $json= json_encode($listaproducts);
    setcookie('products',$json);
}
