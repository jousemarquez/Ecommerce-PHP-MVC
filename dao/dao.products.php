<?php
require_once("../connection/connection.php");
require("../model/model.product.php");
function getProducts($pdo) {
    try {
        $statement = $pdo->query("SELECT * from products");
        $results = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p["image"], $p["name"],$p["description"],$p["price"],$p["category"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "The transaction could not be completed." . $e->getMessage();
        return [];
    }
}
function getPeripherals($pdo) {
    try {
        $statement = $pdo->prepare("SELECT * FROM products WHERE category = 'peripherals'");
        $statement->execute();
        $resultsPeri = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p['image'],$p['name'],$p['description'],$p['price'],$p['category']);
            array_push($resultsPeri, $objectP);
        }
        return $resultsPeri;
    } catch (PDOException $e) {
        echo "The transaction could not be completed." . $e->getMessage();
        return [];
    }
}

function getComponents($pdo) {
    try {
        $componentStmt = $pdo->prepare("SELECT * FROM products WHERE category ='components'");
        $componentStmt->execute();
        $result = [];
        foreach ($componentStmt->fetchAll() as $par) {
            $objectComponent = new Product($par['image'], $par['name'], $par['description'], $par['price'], $par['category']);
            array_push($result, $objectComponent);
        }
        return $result;
    } catch (PDOException $e) {
        echo "The transaction could not be completed." . $e->getMessage();
        return [];
    }
}

function getKeycapProduct($pdo) {
    try {
        $statementteclas = $pdo->prepare("SELECT * FROM products WHERE category ='keys'");
    //    echo $statementteclas;
        $statementteclas->execute();
        $resultsTeclas = [];
        foreach ($statementteclas->fetchAll() as $par) {
            // echo $par;
            $objectPar = new Product($par['image'], $par['name'], $par['description'], $par['price'], $par['category']);
            array_push($resultsTeclas, $objectPar);
        }
        return $resultsTeclas;
    } catch (PDOException $e) {
        echo "The transaction could not be completed." . $e->getMessage();
        return [];
    }
}
