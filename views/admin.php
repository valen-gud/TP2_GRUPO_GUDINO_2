<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php //vista del administrador ----------------

    session_start();

    if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
        header("Location: index.php");
        exit;
    } ?>

    <h1>HOLA ADMINISTRADOR!</h1>
</body>

</html>