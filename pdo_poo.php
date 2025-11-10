<?php


class Database {
    private $host = "localhost";
    private $dbname = "caprishoes";
    private $username = "root";
    private $password = "";
    private $conn;

    public function conectar() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->conn;
    }
}










/*//---------------------------1. crear la conexion----------------------------
$servidor = "localhost";
$usuario = "root";
$pass = "";
$dbname = "capri_shoes";

$conexion = new mysqli($servidor, $usuario, $pass, $dbname);

/*if( $conexion->connect_error){
    die( "No hay conexión con la base de datos");
}else{
    echo "se estableció la conexion con la base de datos";
}*/

/*try {
    $dsn = "mysql:host=$servidor;dbname=$dbname";
    $conexion = new PDO($dsn, $usuario, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage(); //medoto que muestra un mensaje de error
}
*/
/*//---------------------------2. consulta sql----------------------------
$query = "SELECT * FROM `productos`";
$stmp = $conexion->query($query);
*/
/*//---------------------------3. Obtener y manipular los resutados-------------------
class producto{
    public $id;
    public $nombre;
    public $categoria;
    public $color;
    public $talle;
    public $precio;
    public $stock;
    public $descripcion;
    public $imagen_url;
}//vuelve a objeto en lugar de array

$productos = $stmp->fetchAll(PDO::FETCH_CLASS, producto::class);
echo "<pre>";
print_r($productos);
echo "</pre>";
*/
?>