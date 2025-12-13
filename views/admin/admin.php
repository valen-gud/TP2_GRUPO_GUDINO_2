<?php
require_once "../../class/conexion.php";

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$sql = "SELECT * FROM usuarios";
$usuarios = $pdo->query($sql);
?>
<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    header("Location: ../../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminitrador | Capri Shoes</title>
    <link rel="shortcut icon" href="../../favicon2.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estilos_admin.css">
    <link rel="stylesheet" href="../../css/estilos_nav_admin.css">
    <link rel="stylesheet" href="../../css/estilos_footer_admin.css">
</head>

<body>
    <header>
        <?php require_once "../../componentes/nav_admin.php"; ?>
    </header>
    <main>
        <h2 class="text-center mt-5">Panel de Administración</h2>

        <section class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Productos</h3>
                            <p class="card-text">Podrás ver los productos y editarlos, eliminarlos o agregar nuevos.</p>
                            <a href="productos_admin.php" class="btn botonCapriAdmin">Ver productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Usuarios</h3>
                            <p class="card-text">Podrás ver el registro de usuarios y su hora exacta.</p>
                            <a href="usuarios_admin.php" class="btn botonCapriAdmin">Ver registros</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-5 py-4 footer">
        <?php require_once "../../componentes/footer_admin.php" ?>
    </footer>




</body>

</html>