<?php 
require_once("../dao/dao.products.php");
$resultsProKeyCaps = getKeycapProduct($pdo);
$pdo = null;
header("./view/view.products.php");
