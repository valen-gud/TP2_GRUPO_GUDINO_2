<h2>Nuevo producto</h2>

<form method="post" action="../../actions/producto_guardarNuevo.php">
    <input type="text" name="nombre" placeholder="Nombre"><br><br>
    <textarea name="descripcion" placeholder="Descripción"></textarea><br><br>
    <input type="number" name="precio" placeholder="Precio"><br><br>
    <input type="text" name="imagen_url" placeholder="Imagen (ej: zapato.jpg)"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="productos_admin.php">Volver</a>
