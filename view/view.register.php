<!DOCTYPE html>
<html>
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
        <h1 class="display-4">Register</h1>
    </div>
</div>

<div id="contact" class="container">
    <form action="../controller/controller.register.php" method="POST" class="mt-2 mx-auto">
        <div class="form-group row g-3 mt-1">
            <label for="username" class="col-sm-2 col-form-label text-primary">Username:</label>
            <div class="col-sm-10">
                <input type="text" id="username" class="form-control text-info" name="username" required />
            </div>
        </div>

        <div class="form-group row g-3 mt-1">
            <label for="mail" class="col-sm-2 col-form-label text-primary">Email:</label>
            <div class="col input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input type="email" id="mail" class="form-control text-info" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
            </div>
        </div>

        <div class="form-group row g-3 mt-1">
            <label for="pass" class="col-sm-2 col-form-label text-primary">Password:</label>
            <div class="col-sm-10">
                <input type="password" id="pass" class="form-control text-info" name="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="It must contain at least one number and one uppercase and one lowercase letter, and at least 8 or more characters."/>
            </div>
        </div>

        <div class="form-group row g-3 mt-2">
            <label class="col-sm-2 col-form-label text-primary" for="description">Description:</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" cols="40" rows="5" class="form-control text-info mt-2" required></textarea>
            </div>
        </div>

        <div class="form-group row g-3 mt-2">
            <div class="col">
                <input id="sendBttn" class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit"/>
            </div>
        </div>

        <div class="form-group row g-3 mt-2">
            <div class="col">
                <a href="../view/view.login.php">Already register? -> Login</a>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
