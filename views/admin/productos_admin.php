<?php
session_start();
require_once "../../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../../index.php");
    exit;
}

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$productos = $pdo->query("SELECT * FROM productos");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar productos</title>
    <link rel="shortcut icon" href="../../favicon2.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estilos_productos_admin.css">
    <link rel="stylesheet" href="../../css/estilos_nav_admin.css">
    <link rel="stylesheet" href="../../css/estilos_footer_admin.css">
</head>

<body>
    <header>
        <?php require_once "../../componentes/nav_admin.php"; ?>
    </header>

    <main class="container my-5">
        <h1 class="text-center mt-5">Administrar productos</h1>

        <div class="mt-5">
            <a class="btn botonAgregar" href="producto_nuevo.php"> Agregar producto</a>
            <a class="btn botonVolverAdmin"  href="admin.php">Volver al panel</a>
        </div>

        <hr class="mt-3">

        <table class="container table table-dark table-striped table-hover align-middle mt-5">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen del producto</th>
                    <th>Nombre del producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($p = $productos->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>

                        <td>
                            <img src="../../img/<?= $p['imagen_url'] ?>" width="60">
                        </td>

                        <td><?= $p['nombre'] ?></td>

                        <td>
                            <?= strlen($p['descripcion']) > 60
                                ? substr($p['descripcion'], 0, 60) . '...'
                                : $p['descripcion']; ?>
                        </td>

                        <td>$<?= $p['precio'] ?></td>

                        <td>
                            <a href="producto_editar.php?id=<?= $p['id'] ?>"
                                class="btn btn-sm botonEditar">
                                Editar
                            </a>

                            <a href="../../actions/producto_eliminar.php?id=<?= $p['id'] ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro querés eliminar este producto?')">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>




    </main>

    <footer class="mt-5 py-4 footer">
        <?php require_once "../../componentes/footer_admin.php" ?>
    </footer>



</body>

</html>