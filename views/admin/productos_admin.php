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

    <main>
        <h1 class="text-center mt-5">Administrar productos</h1>

        <a href="producto_nuevo.php">➕ Agregar producto</a>
        <hr>

        <?php while ($p = $productos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
                <h4><?= $p['nombre'] ?></h4>
                <img src="../../img/<?= $p['imagen_url'] ?>" width="120">
                <p><?= $p['descripcion'] ?></p>
                <p><b>Precio:</b> $<?= $p['precio'] ?></p>

                <a href="producto_editar.php?id=<?= $p['id'] ?>">✏ Editar</a> |
                <a href="../../actions/producto_eliminar.php?id=<?= $p['id'] ?>"
                    onclick="return confirm('¿Seguro querés eliminar este producto?')">
                    🗑 Eliminar
                </a>
            </div>
        <?php } ?>

        <a href="admin.php">⬅ Volver al panel</a>


    </main>

    <footer class="mt-5 py-4 footer">
        <?php require_once "../../componentes/footer_admin.php" ?>
    </footer>



</body>

</html>