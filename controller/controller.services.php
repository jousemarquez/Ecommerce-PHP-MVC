<?php
    require_once "../dao/dao.services.php";
    $resultsPheripherals = getServices($pdo);
    $pdo = null;
    header("./view/view.products.php");
