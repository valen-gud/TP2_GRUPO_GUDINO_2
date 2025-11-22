<?php

require_once "../class/conexion.php";

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

//evitar acceder al archivo por url
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../views/404.php");
    exit;
}


//trim limpia los espacios en blanco
$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["email"] ?? "");
$telefono = trim($_POST["telefono"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");


//limpia el los datos ingresados en caso de que los lea como codigo
$nombre = htmlspecialchars($nombre);
$email = htmlspecialchars($email);
$telefono = htmlspecialchars($telefono);
$mensaje = htmlspecialchars($mensaje);




header("Location: ../views/formEnviado.php");
exit;