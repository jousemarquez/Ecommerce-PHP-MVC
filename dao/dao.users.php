<?php 
require_once("../connection/Connection.php");
require("../model/model.users.php");
function getUsers($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from users ");
        $results = [];
        foreach ($statement->fetchAll() as $u) {
            $objectP = new Users($u["username"], $u["mail"],$u["pass"],$u["description"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "The transaction could not be completed." .$e;
    }
}
