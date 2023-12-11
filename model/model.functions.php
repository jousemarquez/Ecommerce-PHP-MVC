<?php 
include ('../connection/connection.php');
function getProductsById($pdo, $productIds) {
    $productsStr = implode(",", $productIds);
    $query = "SELECT * FROM products WHERE id_product IN ($productsStr)";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getServicesById($pdo, $serviceIds) {
    $serviceIdsStr = implode(",", $serviceIds);
    $query = "SELECT * FROM services WHERE id_service IN ($serviceIdsStr)";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $servicios;
}
