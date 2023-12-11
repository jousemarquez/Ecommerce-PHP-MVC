<?php
require_once "../controller/controller.workers.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>About Us</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="javascript:history.back()">
    < Back
  </a>
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
    <h1 class="display-4">About Us</h1>
  </div>
</div>

<div class="container">
  <h2 class="text-center mb-4">Our Team</h2>
  <div class="row">
    <?php foreach ($resultsWorkers as $p): ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?=$p->image;?>" class="card-img-top" alt="Worker Image">
          <div class="card-body">
            <h5 class="card-title"><?=$p->name;?></h5>
            <p class="card-text"><?=$p->role;?></p>
            <p class="card-text"><?=$p->description;?></p>
            <p class="card-text"><small class="text-muted">Nationality: <?=$p->country;?></small></p>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
