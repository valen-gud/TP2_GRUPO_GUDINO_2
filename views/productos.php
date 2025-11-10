
<link rel="stylesheet" href="../css/estilos_paginado.css">

<?php
require_once "./class/producto.php";

$pagina = $_GET["pagina"] ?? 1;
$limite = 4; // cantidad de productos por página

$productoModel = new Producto();
$productos = $productoModel->obtenerProductoPorPagina($pagina, $limite);
$totalProductos = count($productoModel->obtenerProductos());
$totalPaginas = ceil($totalProductos / $limite);
?>


<div class=" divPaginado mt-5 justify-content-center">
    <nav aria-label=" paginadoNav Page navigation example">
        <ul class=" paginado pagination justify-content-center">
            <li class="page-item paginadoItem <?= $pagina <= 1 ? 'disabled' : '' ?>">
                <a class="page-link " href="index.php?view=productos&pagina=<?= $pagina - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="paginadoItem page-item <?= $pagina == 1 ? 'active' : '' ?>">
                <a class="paginadoLink page-link" href="index.php?view=productos&pagina=1">1</a>
            </li>
            <li class="page-item <?= $pagina == 2 ? 'active' : '' ?>">
                <a class="page-link" href="index.php?view=productos&pagina=2">2</a>
            </li>
            <li class="page-item <?= $pagina == 3 ? 'active' : '' ?>">
                <a class="page-link" href="index.php?view=productos&pagina=3">3</a>
            </li>
            <li class="page-item <?= $pagina == 4 ? 'active' : '' ?>">
                <a class="page-link" href="index.php?view=productos&pagina=4">4</a>
            </li>
            <li class="page-item <?= $pagina >= $totalPaginas ? 'disabled' : '' ?>">
                <a class="page-link" href="index.php?view=productos&pagina=<?= $pagina + 1 ?> "  aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>