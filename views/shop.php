

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/estilos_shop.css">



<?php
// vista solo de usuarios compradores --------------
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'usuario') {
    header("Location: index.php");
    exit();
}

require_once "../class/conexion.php";
require_once "../class/producto.php";
require_once "../componentes/nav.php";
require_once "../class/funciones.php";  



$pagina = $_GET["pagina"] ?? 1;
$limite = 4; // cantidad de productos por página

$productoModel = new Producto();


try {
    $productos = $productoModel->obtenerProductoPorPagina($pagina, $limite);
    $totalProductos = count($productoModel->obtenerProductos());
    $totalPaginas = ceil($totalProductos / $limite);

    // ⭐ Si la página no existe → 404
    if ($pagina < 1 || $pagina > $totalPaginas) {
        mostrarError404();
    }

    // ⭐ Si la consulta falla → 404
    if (!$productos) {
        mostrarError404();
    }

} catch (Exception $e) {
    // ⭐ Error en conexión o consulta → 404
    mostrarError404();
}
?>


<H1 class="text-center mt-4 mb-4">HOLA COMPRADOR</H1>

<div class="container mt-4">
    <div class="row justify-content-center">
        <?php if (isset($productos) && !empty($productos)) { ?>
            <?php foreach ($productos as $producto) { ?>
                <div class="container col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="card cardProducto m-2" style="width: 18rem;">

                        <img src="../img/<?php echo $producto->getImagen_url(); ?>" class="card-img-top">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto->getNombre(); ?></h5>
                            <p class="card-text"><?php echo nl2br($producto->getDescripcion()); ?></p>
                            <h6 class="precio  fw-bold">
                                $<?php echo number_format($producto->getPrecio(), 0, ',', '.'); ?>
                            </h6>
                            <a href="./404.php" class="btn botonComprar w-100">Comprar</a>
                        </div>

                    </div>
                </div>

            <?php } ?>
        <?php } else { ?>
            <p class="text-danger text-center">No hay productos para mostrar.</p>
        <?php } ?>

    </div>
</div>

<div class=" divPaginado mt-5 justify-content-center">
    <nav aria-label=" paginadoNav Page navigation example">
        <ul class=" paginado pagination justify-content-center">
            <li class="page-item paginadoItem <?= $pagina <= 1 ? 'disabled' : '' ?>"> <!-- si la pagina es menor o igual a 1 que se vea desactivado-->
                <a class="page-link " href="shop.php?pagina=<?= $pagina - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="paginadoItem page-item <?= $pagina == 1 ? 'active' : '' ?>">
                <a class="paginadoLink page-link" href="shop.php?pagina=1">1</a>
            </li>
            <li class="page-item <?= $pagina == 2 ? 'active' : '' ?>"> <!-- si la pagina es igual al num de pag, que se muestre el paginado activo en color gris-->
                <a class="page-link" href="shop.php?pagina=2">2</a>
            </li>
            <li class="page-item <?= $pagina == 3 ? 'active' : '' ?>">
                <a class="page-link" href="shop.php?pagina=3">3</a>
            </li>
            <li class="page-item <?= $pagina == 4 ? 'active' : '' ?>">
                <a class="page-link" href="shop.php?pagina=4">4</a>
            </li>
            <li class="page-item <?= $pagina == 5 ? 'active' : '' ?>">
                <a class="page-link" href="shop.php?pagina=5">5</a>
            </li>
            <li class="page-item <?= $pagina >= $totalPaginas ? 'disabled' : '' ?>"> <!-- si la pagina es mayor o igual al total de las paginas que se vea desactivado-->
                <a class="page-link" href="shop.php?pagina=<?= $pagina + 1 ?> " aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<footer>
    <?php require_once "../componentes/footer.php" ?>
</footer>