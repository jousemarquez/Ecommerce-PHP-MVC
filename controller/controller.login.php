<?php
include '../connection/connection.php';
try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $username = $_POST['username'];
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    if ($stmt->rowCount() == 1) {
        $_SESSION["user"] = $stmt->fetch();
        setcookie("username", $_SESSION["user"]->username, time() + (86400 * 2), "/");
        header("Location: ../view/view.products.php");
        echo "Login Succesfully";
    } else {
        echo "Login Unsuccessful";
        header("Location: ../view/view.login.php");
    }
} catch (PDOException $e) {
    echo $e;
    require "../errors/Error.php";
}
