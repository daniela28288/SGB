<?php

require 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO autores(nombre) VALUES (?) ";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$nombre]);

    echo " 
    <script>
    alert('Registro exitoso');
    window.location.href = './View/registerLibro.php';
    </script>
    ";
}


   