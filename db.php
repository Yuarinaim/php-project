<?php

$servidor = "localhost"; // 127.0.0.1
$baseDeDatos = "crud_php";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
