<?php
require_once "../connection/connection.php";
require "../model/model.workers.php";

function selectWorkers($pdo) {
    try {
        $statement = $pdo->query("SELECT * from workers");
        $resultWorkers = [];
        foreach ($statement->fetchAll() as $w) {
            $objectW = new Workers($w["name"], $w["role"], $w["image"], $w["description"], $w["country"]);
            array_push($resultWorkers, $objectW);
        }
        return $resultWorkers;

    } catch (PDOException $e) {
        echo "The transaction could not be completed.";
    }
}
