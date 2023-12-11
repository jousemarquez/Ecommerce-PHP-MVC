<?php
require_once("../connection/Connection.php");
try {
        $stmt = $pdo->prepare("INSERT INTO users (id_user, username, mail, pass, description) 
                               VALUES (null, :username, :mail, :pass, :description)");
        $username =$_POST["username"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $description = $_POST["description"];
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        header("Location: ../view/view.login.php");
        echo("User data inserted successfully.");
} catch (PDOException $e) {
    echo "Error on data: " . $e->getMessage();
}