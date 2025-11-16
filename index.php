<?php

require_once "class/conexion.php";
require_once "class/producto.php";
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$productoModel = new Producto();
$productos = $productoModel->obtenerProductoPorPagina($pagina, 4);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capri Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_index.css">
    <link rel="stylesheet" href="css/estilos_paginado.css">

</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
        <?php require_once "pdo_poo.php" ?>
    </header>

    <main>
        <section>
            <h1 class="text-center mt-4 mb-4">PRODUCTOS</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach ($productos as $producto) { ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                            <div class="card cardProducto m-2 " style="width: 18rem;">
                                <img src="img/<?= $producto->getImagen_url(); ?>" class="card-img-top" alt="<?= $producto->getNombre(); ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $producto->getNombre(); ?></h4>
                                    <p class="card-text"><?= nl2br($producto->getDescripcion()); ?></p>
                                    <h6 class="precio fw-bold">$<?= number_format($producto->getPrecio(), 2, ',', '.'); ?></h6>
                                    <a href="./views/404.php" class="btn botonComprar  w-100">Comprar</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php require_once "./views/productos.php" ?>
                </div>
            </div>
        </section>

    </main>


    <footer>
        <?php require_once "footer.php" ?>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>