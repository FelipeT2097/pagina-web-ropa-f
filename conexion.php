<?php

$server = "localhost";
$user = "root";
$password = "EllaNoTeAma20";
$db = "ropa_f";
$port = "33065";

// Crear conexión
$conexion = new mysqli($server, $user, $password,$db, $port);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}else{
    // echo "Conectado";
}
?>
