<?php
require_once 'conexion.php';

class producto {

    private $id;
    private $nombre;
    private $categoria;
    private $color;
    private $talle;
    private $precio;
    private $stock;
    private $descripcion;
    private $imagen_url;

    public function __construct() {}

    public function obtenerProductos() {
        $conexion = (new conexion())->getConexion();
        $query = "SELECT * FROM productos";
        $stmt = $conexion->query($query);
        $productos = $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
        return $productos;
    }

    public function obtenerProductoPorPagina($pagina = 1, $limite = 4) {
        $conexion = (new conexion())->getConexion();
        $offset = ($pagina - 1) * $limite;
        $query = "SELECT * FROM productos LIMIT $limite OFFSET $offset";
        $stmt = $conexion->query($query);
        $productos = $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
        return $productos;
    }

    public function obtenerProductoByNombre($nombre) {
        $conexion = (new conexion())->getConexion();
        $query = "SELECT * FROM productos WHERE nombre = :nombre";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->execute();
        return $stmt->fetchObject(self::class);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of talle
     */
    public function getTalle()
    {
        return $this->talle;
    }

    /**
     * Set the value of talle
     *
     * @return  self
     */
    public function setTalle($talle)
    {
        $this->talle = $talle;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of imagen_url
     */
    public function getImagen_url()
    {
        return $this->imagen_url;
    }

    /**
     * Set the value of imagen_url
     *
     * @return  self
     */
    public function setImagen_url($imagen_url)
    {
        $this->imagen_url = $imagen_url;

        return $this;
    }
}
