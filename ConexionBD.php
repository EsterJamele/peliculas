<?php

$conexion = new mysqli('localhost', 'root', 'root', 'bd_ester_examencliente');

mysqli_set_charset($conexion,"utf8");

$error = $conexion->connect_errno;

if ($error != null) {
    echo "<p>Error $error conectando a la base de datos: 
    $conexion->connect_error</p>";
    exit();
}

