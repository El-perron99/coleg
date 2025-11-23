<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "colegio";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
echo "Conexión exitosa a la base de datos colegio";
?>