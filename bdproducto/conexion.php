<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'almacen';

$conexion = mysqli_connect($host, $username, $password, $database);

if(!$conexion){
    die("error en conexion: ". mysqli_connect_error());

}
?>