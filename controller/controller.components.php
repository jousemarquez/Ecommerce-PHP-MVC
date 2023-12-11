<?php 
require_once("../dao/dao.products.php");
$resultsProParts = getComponents($pdo);
$pdo = null;
header("./view/view.products.php");
