<?php
$host = 'localhost';
$db = 'post';
$user = 'root';
$pass = '';
$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>"