<?php
require_once "../controller/controller.keycaps.php";
?>

<!DOCTYPE html>
 <head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo-blank.png" type="image/xpng">
    <meta name="description" content="PICATCLAS Hardware Store">
    <meta name="keywords" content="php, dao, pdo, hardware, store, picatclas">
    <meta name="language" content="en">
    <meta name="author" content="joseantonio.marquez@a.vedrunasevillasj.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Sunday, December 10th, 2023, 1:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <title>PICATCLAS Hardware Store</title>
 
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="javascript:history.back()">< Back</a>
  <div>
    <a class="btn btn-primary"href="../view/view.products.php">All Products</a>
    <a class="btn btn-primary" href="../view/view.peripherals.php">Peripherals</a>
    <a class="btn btn-primary" href="../view/view.components.php">Components</a>
    <a class="btn btn-primary" href="../view/view.keycaps.php">Key Caps</a>
    <a class="btn btn-primary" href="../view/view.services.php">Services</a>
    <a class="btn btn-primary" href="../view/view.about_us.php">About us </a>
    <a class="btn btn-primary" href ="../view/view.contact_us.php">Contact us</a>
    <a class="btn btn-success" href="../view/view.cart.php">🛒 Cart</a>
    <a class="btn btn-warning" href="../view/view.user_profile.php">User Profile</a>
    <a class="btn btn-danger" href="../controller/controller.logout.php">Logout</a>
</div>
</nav>

<div class="jumbotron jumbotron-fluid text-white bg-dark text-center">
  <div class="container">
    <h1 class="display-4">Our KeyCaps</h1>
  </div>
</div>


<div class="container">
    <div class="row">
        <?php foreach ($resultsProKeyCaps as $p): ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="<?= $p->image; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                    <h5 class="card-title"><?= $p->name; ?></h5>
                    <p class="card-text"><?= $p->description; ?></p>
                    <p class="card-text">Price: $<?= $p->price; ?></p>
                    <form method="POST" action="view.cart.php">
                        <input type="hidden" name="id_product" value="<?= $p->idProduct; ?>">
                        <button type="submit" class="btn btn-warning">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 </body>
 </html>