<?php
    require_once("../connection/connection.php");
    require("../model/model.services.php");

    function getServices($pdo){
        try{
        $statement = $pdo->query("SELECT * from services");
        $results = [];

        foreach($statement->fetchAll() as $s){
            $objectS = new Services($s["name"],$s["image"],$s["description"],$s["price"],$s["category"]);
            array_push($results,$objectS);
        }
        return $results;
    }catch(PDOException $e){
        echo "The transaction could not be completed.".$e;
    }
}
?>