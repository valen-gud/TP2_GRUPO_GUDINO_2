
<?php

function mostrarError404() {
    header("Location: ../views/404.php");  //muestra error 404 cuando no se encuentra la url o la BD
    exit();
}

?>
