<?php 
require_once("../controller/controller.cart.php");
require_once("../model/model.cart.php");
require_once("../model/model.product.php");
require_once("../model/model.cartitem.php");
?>

<!DOCTYPE html>

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
    <h1 class="display-4">Cart</h1>
  </div>
</div>

<?php
$cart = new Cart();

$product1 = new Product("data:image/jpeg;base64,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", "alt keys", "This product is a alt keys", 15.95, "keycap");
$item1 = new CartItem($product1, 1);
$cart->addItem($item1);
?>


<?php if ($cart->isEmpty()): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        
        <div class="container">
            <div class="row">
                <?php foreach ($cart->getItems() as $item): ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="<?= $item->getImage(); ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item->getName(); ?></h5>
                                <p class="card-text"><?= $item->getDescription(); ?></p>
                                <p class="card-text">Price: $<?= $item->getPrice(); ?></p>
                                <p class="card-text">Quantity: <?= $item->getQuantity(); ?></p>
                                <form method="POST" action="../controller/controller.cart.php">
                                    <input type="hidden" name="action" value="remove">
                                    <input type="hidden" name="id_product" value="<?= $item->getIdProduct(); ?>">
                                    <button type="submit">Remove from Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <a href="../view/view.products.php">Continue Shopping</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>