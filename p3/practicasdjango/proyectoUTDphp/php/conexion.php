<?php
$conexion = new mysqli('localhost', 'root', '', 'database');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>