<?php 
session_start();
require_once("../connection/connection.php");
require("../model/model.product.php");
require("../model/model.service.php");

if(!isset($_COOKIE["cartCokie"]) && isset($_GET["type"]) && isset($_GET["id"])) {
    //Setear la cookie por primera vez
    $articleId = $_GET["id"];
    $articleType = $_GET["type"];
    $cookieName = "cartCokie";
    $cart =[];
    $cartArticles = [
        "type"=>$articleType,
        "id"=>$articleId,
        "quantity"=>1
    ];
    array_push($cart, $cartArticles);
    $cookie_value = base64_encode(serialize($cart));
    setcookie($cookieName, $cookie_value, time() + (24 * 60 * 60 * 2), "/");
    header("Location: ../view/cartView.php");
} else if (isset($_GET["type"]) && isset($_GET["id"])){
    // La cookie ya esta setteada
    $articleId = $_GET["id"];
    $articleType = $_GET["type"];
    $articles = unserialize(base64_decode($_COOKIE["cartCokie"]));
    function searchArrayByKeys(&$articles, $value1, $value2) {
        $cont = 0;
        foreach ($articles as $art) {

            if ($art["type"] === $value1 && $art["id"] === $value2) {
                $art["quantity"] = $art["quantity"] + 1;
                
                $articles[$cont] = $art;
                $cookieValue = base64_encode(serialize($articles));
                setcookie("cartCokie", $cookieValue, time() + (24 * 60 * 60 * 2), "/");
                // El producto se encontro en el carro
                return true; 
            }
            $cont++;
        }
        // El producto no esta en el carro
        return false; 
    }
    $itemExists = searchArrayByKeys($articles, $articleType, $articleId);
    if (!$itemExists) {
        //Añadir un producto nuevo
        $cartArticles = [
            "type"=>$articleType,
            "id"=>$articleId,
            "quantity"=>1
        ];
        
        array_push($articles, $cartArticles);
        $cookieValue = base64_encode(serialize($articles));
        setcookie("cartCokie", $cookieValue, time() + (24 * 60 * 60 * 2), "/");
        header("Location: ../controller/ProductsController.php?select=all");
    }

}


header("Location: ../controller/ProductsController.php?select=all");

?>