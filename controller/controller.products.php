<?php 
require_once("../dao/dao.products.php");
$resultsPro = getProducts($pdo);
$pdo = null;
header("./view/view.products.php");
