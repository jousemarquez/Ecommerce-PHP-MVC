<?php
session_start();
include '../model/model.purchase.php';

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo-blank.png" type="image/xpng">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="en">
    <meta name="author" content="joseantonio.marquez@a.vedrunasevillasj.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Sunday, December 10th, 2023, 1:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>
    <title>PICATCLAS Hardware Store</title>
    <link rel="stylesheet" type="text/css" href="../estilos.css" />

</head>

<body>
    <a href="javascript:history.back()">< Back</a>
    <h3>User Data</h3>
    <p>Username: <?= $user['username'] ?></p>
    <p>Email: <?= $user['mail'] ?></p>
    <p>Description: <?= $user['description'] ?></p>

    <?php
    $purchases = getPurchases($pdo, $user['id_user']);

    // Show latest purchases
    if (count($purchases) > 0) {
        echo "<h3>Past Purchases</h3>";
        foreach ($purchases as $purchase) {
            echo "<p>Product: " . $purchase['name'] . "</p>";
            echo "<p>Description: " . $purchase['description'] . "</p>";
            echo "<p>Price: " . $purchase['price'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No purchases were found.</p>";
    }
    ?>

    <h1>Edit User Data:</h1>
    <form action="./view.update_user.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $user['username'] ?>">
        <label for="mail">Email:</label>
        <input type="email" name="mail" id="mail" value="<?= $user['mail'] ?>">
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"><?= $user['description'] ?></textarea>
        <input type="submit" value="Update">
    </form>
    <a class="btn btn-danger" href="../controller/controller.logout.php">Logout</a>
</body>

</html>

<?php
} else {
    echo "Session not started";
}
?>