<?php
include ('../connection/connection.php');
function getPurchases($pdo,$user) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM carts WHERE id_user = :id_user");
        $stmt->bindParam(':id_user', $_SESSION['user']['id_user']);
        $stmt->execute();
        $purchases = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $purchases;
    } catch (PDOException $e){
        echo $e;
        require("../errors/Error.php");
    }
}
