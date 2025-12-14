<?php
session_start();
require_once "../../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../../index.php");
    exit;
}

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$usuarios = $pdo->query("SELECT name, email, rol, created_at FROM usuarios");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="shortcut icon" href="../../favicon2.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estilos_usuarios_admin.css">
    <link rel="stylesheet" href="../../css/estilos_nav_admin.css">
    <link rel="stylesheet" href="../../css/estilos_footer_admin.css">
</head>

<body>

    <header>
        <?php require_once "../../componentes/nav_admin.php"; ?>
    </header>

    <main>
        <h1 class="text-center mt-5">Usuarios registrados</h1>

        <div class="mt-5">
            <a class="btn botonVolverAdmin" href="admin.php">Volver al panel</a>
        </div>

        <hr class="mt-3">

        <table class="container table table-dark table-striped table-hover align-middle mt-5">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($u = $usuarios->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $u['name'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['rol'] == 1 ? 'Admin' : 'Usuario' ?></td>
                        <td><?= $u['created_at'] ?></td>
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