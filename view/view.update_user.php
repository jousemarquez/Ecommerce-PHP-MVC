<?php
session_start();
require_once "../connection/connection.php";

try {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $description = $_POST['description'];
    
    $stmt = $pdo->prepare ("UPDATE users SET username='$username', mail='$mail', description='$description' WHERE id_user=$id_user");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id_user', $id_user);

    if ($stmt->execute()) {
        $_SESSION["user"]["username"] = $username;
        $_SESSION["user"]["mail"] = $mail;
        $_SESSION["user"]["description"] = $description;
        header("Location: ../view/view.user_profile.php");
        exit();
    } else {
        error_log("Error updating user data in the database");
        echo "Failed to update user data. Please try again.";
    }

} catch (PDOException $e){
    error_log("PDOException: " . $e->getMessage());
    echo "An unexpected error occurred. Please try again later.";
}
?>
