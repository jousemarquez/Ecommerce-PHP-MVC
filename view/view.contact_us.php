<!DOCTYPE html>
<html lang="en">

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
            <a class="btn btn-primary" href="../view/view.products.php">All Products</a>
            <a class="btn btn-primary" href="../view/view.peripherals.php">Peripherals</a>
            <a class="btn btn-primary" href="../view/view.components.php">Components</a>
            <a class="btn btn-primary" href="../view/view.keycaps.php">Key Caps</a>
            <a class="btn btn-primary" href="../view/view.services.php">Services</a>
            <a class="btn btn-primary" href="../view/view.about_us.php">About us </a>
            <a class="btn btn-primary" href="../view/view.contact_us.php">Contact us</a>
            <a class="btn btn-success" href="../view/view.cart.php">🛒 Cart</a>
            <a class="btn btn-warning" href="../view/view.user_profile.php">User Profile</a>
            <a class="btn btn-danger" href="../controller/controller.logout.php">Logout</a>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid text-white bg-dark text-center">
        <div class="container">
            <h1 class="display-4">Contact Us</h1>
        </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Contact Information:</h3>
            <p>Phone: <a href="tel:123456789">123-456-789</a></p>
            <p>Email: <a href="mailto:info@picatlca.co">info@picatlca.co</a></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Send us an email:</h3>
            <form method="POST" action="../indexMail.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Message:</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
