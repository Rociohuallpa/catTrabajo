<?php
require_once('../conexion.php');
class Producto{
    public $nombre,$stock, $precio;
    public $conexion; 


    public function __construct( $nombre,$stock, $precio, $conexion)
    {
     
        $this->nombre =$nombre;
        $this->stock =$stock;
        $this->precio =$precio;
        $this->conexion =$conexion;

    }

    public function RegistrarProducto()
    {
        $sql = "INSERT INTO 'producto'( `nombre`, `stock`, `precio`) VALUES ('$this->nombre ','$this-> stock','$this-> precio')";
        if (mysqli_query($this->conexion, $sql)) {
            echo "El producto fue registrado correctamente <hr>";
        } else {
            echo "Error al registrar al producto: " . mysqli_error($this->conexion);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_REQUEST['nombre'];
    $stock = $_REQUEST['stock'];
    $precio = $_REQUEST['precio'];
   

    $productito = new Producto( $conexion, $nombre,$stock, $precio );

    $productito->RegistrarProducto();
}



