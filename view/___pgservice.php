<?php
require_once("../connection/connection.php");
require("../model/model.services.php");

function getServices($pdo) {
    try {
        $statement = $pdo->prepare("SELECT * FROM services WHERE name=:nameService");
        $statement->bindParam(':nameService', $_GET['nameService']);
        $statement->execute();
        
        $resultsTypeResult = [];
        while ($s = $statement->fetch(PDO::FETCH_ASSOC)) {
            $objectS = new Services($s["name"], $s["image"], $s["description"], $s["price"], $s["category"]);
            array_push($resultsTypeResult, $objectS);
        }
        
        return $resultsTypeResult;
    } catch(PDOException $e) {
        echo "No se ha podido completar la transacción: " . $e->getMessage();
    }
}

// Llama a la función getServices() para obtener los servicios
$resultsTypeResult = getServices($pdo);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Resto del código del encabezado -->
</head>
<body>
    <header>
        <!-- Resto del código del encabezado -->
    </header>
    <div>
        <!-- Resto del código de los botones -->
    </div>
    <form>
    <a href="javascript:history.back()">< Back</a>
        <div style="width: 100%">
            <?php foreach($resultsTypeResult as $service): ?>
                <div class="product">
                    <img src=<?= $service->image;?>></img>
                    <h2><?= $service->nameService; ?></h2>
                    <p><?= $service->description; ?></p>
                    <p>Price: <?= $service->price; ?></p>
                    <!-- <a href="./pgservice.php?nameService=<?= urlencode($service->nameService); ?>">Ver más detalles</a> -->
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</body>
</html>