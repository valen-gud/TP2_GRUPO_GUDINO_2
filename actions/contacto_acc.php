<?php

require_once "../class/conexion.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

//limpia el los datos ingresados en caso de que los lea como codigo
$nombre = htmlspecialchars($_POST["nombre"]);
$email = htmlspecialchars($_POST["email"]);
$telefono = htmlspecialchars($_POST["telefono"]);
$mensaje = htmlspecialchars($_POST["mensaje"]);

try {
    $conexion = (new conexion())->getConexion();
    /*foreach ($usuarios as $usuarios) {
        if( $usuario["nombre" == $nombre]){
            if( $usuario["email" == $email]){
                if( $usuario["telefono" == $telefono]){
                    if( $usuario["mensaje" == $mensaje]){
                        echo "mendaje ENVIADO";
                    }
                }
            }
        }
    }*/

//------------------------------creo que para el foreach si o si voy a necesitar una bd de usuarios que envien el form (como la bd de productos) para que se pueda validar, sino no creo -------------------------------        logica como los getters y setters de prouctos.php clase 15/10/25

} catch (Exception $e) {
    echo $e->getMessage();
}
