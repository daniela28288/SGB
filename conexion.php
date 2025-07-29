<?php

$host = 'localhost';
$dbname = 'db_biblioteca';
$user = 'root';
$pass = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion exitosa";
} catch (PDOException $e){
    echo ("error de conexion") . $e->getMessage();

}