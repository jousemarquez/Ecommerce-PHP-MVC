<?php 
include("../model/model.functions.php")?>

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
   
    // Verificar si se ha enviado el formulario de eliminar producto
    if (isset($_POST["eliminarProducto"])) {
        // Obtener el ID del producto a eliminar
        $id_productEliminar = $_POST["eliminarProducto"];
        // Buscar el índice del producto en el array del carrito de productos
        $indiceProducto = array_search($id_productEliminar, $_SESSION["carritoProductos"]);
        // Eliminar el producto del carrito
        unset($_SESSION["carritoProductos"][$indiceProducto]);
        // Redirigir al user a la página de la cesta
        header("Location: view.cart.php");
    }
    // Verificar si se ha enviado el formulario de eliminar servicio
    if (isset($_POST["eliminarServicio"])) {
        // Obtener el ID del servicio a eliminar
        $idServicioEliminar = $_POST["eliminarServicio"];
        // Buscar el índice del servicio en el array del carrito de servicios
        $indiceServicio = array_search($idServicioEliminar, $_SESSION["carritoServicios"]);
        // Eliminar el servicio del carrito
        unset($_SESSION["carritoServicios"][$indiceServicio]);
        // Redirigir al user a la página de la cesta
        header("Location: view.cart.php");
    }
    // Verificar si la variable de sesión "carritoProductos" existe
    if (!isset($_SESSION["carritoProductos"])) {
        $_SESSION["carritoProductos"] = array(); // Si no existe, inicializarla como un array vacío
    }
    if (isset($_POST["id_product"])) {
        // Obtener el ID del producto seleccionado
        $id_product = $_POST["id_product"];
        // Agregar el ID del producto al carrito de productos
        $_SESSION["carritoProductos"][] = $id_product;
    }
    // Verificar si la variable de sesión "carritoServicios" existe
    if (!isset($_SESSION["carritoServicios"])) {
        $_SESSION["carritoServicios"] = array(); // Si no existe, inicializarla como un array vacío
    }
    if (isset($_POST["idServicio"])) {
        // Obtener el ID del servicio seleccionado
        $idServicio = $_POST["idServicio"];
        // Agregar el ID del servicio al carrito de servicios
        $_SESSION["carritoServicios"][] = $idServicio;
    }
    // Verificar si la variable de sesión "carritoProductos" existe y tiene productos
    if (isset($_SESSION["carritoProductos"]) && count($_SESSION["carritoProductos"]) > 0) {
        // Obtener los IDs de los productos del carrito
        $productIds = $_SESSION["carritoProductos"];
        // Obtener los detalles de los productos desde la base de datos
        $productsCarrito = getProductsById($pdo, $productIds);
        // Mostrar los productos en el carrito
        foreach ($productsCarrito as $producto) {
            echo $producto['name'] . "<br>";
            echo $producto['description'] . "<br>";
            echo $producto['price'] . "<br>";
            echo $producto['category'] . "<br>";
            echo '<img src="' . $producto['image'] . '"><br>';
            echo "<br>";
            ?>
            <form method="POST" action="">
                <input type="hidden" name="eliminarProducto" value="<?php echo $producto['id_product']; ?>">
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
            </form>
        <?php
        }
    } else {
        echo "No hay productos en el carrito";
    }
    // Verificar si la variable de sesión "carritoServicios" existe y tiene servicios
    if (isset($_SESSION["carritoServicios"]) && count($_SESSION["carritoServicios"]) > 0) {
        // Obtener los IDs de los servicios del carrito
        $serviceIds = $_SESSION["carritoServicios"];
        // Obtener los detalles de los servicios desde la base de datos
        $serviciosCarrito = getServicesById($pdo, $serviceIds);
        // Mostrar los servicios en el carrito
        foreach ($serviciosCarrito as $servicio) {
            echo $servicio['name'] . "<br>";
            echo $servicio['description'] . "<br>";
            echo $servicio['price'] . "<br>";
            echo $servicio['category'] . "<br>";
            echo '<img src="' . $servicio['image'] . '"><br>';
            echo "<br>";
            ?>
            <form method="POST" action="">
                <input type="hidden" name="eliminarServicio" value="<?php echo $servicio['id_service']; ?>">
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
            </form>
        <?php
        }
    } else {
        echo "No hay servicios en el carrito";
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>