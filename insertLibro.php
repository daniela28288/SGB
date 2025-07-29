<?php

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $editorial = $_POST['editorial'];
    $año = $_POST['año'];
    $isbn = $_POST['isbn'];
    $estado = $_POST['estado'];
    $cantidad = $_POST['cantidad'];


   
if (empty($_FILES['portada']['name'])) {
    $rutaDestino = 'img/iconolibro.jpg';


} else {
    $nombreArchivo = basename($_FILES['portada']['name']);
    $carpetaDestino = 'img/';
    if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true);
    }

        $rutaDestino = $carpetaDestino . $nombreArchivo;
        
        if (!move_uploaded_file($_FILES['portada']['tmp_name'], $rutaDestino)) {
            $rutaDestino = 'img/iconolibro.jpg';
        }
    }

    $imagen = $rutaDestino;



        $sql = "INSERT INTO libros(id_autor, id_genero, titulo, descripcion, editorial, anio_publicacion, ISBN, imagen, estado, cantidad) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$autor, $genero, $titulo, $descripcion, $editorial, $año, $isbn, $imagen, $estado, $cantidad]);

        echo " 
        <script>
        alert('Registro exitoso');
        window.location.href = './View/pantallaPrincipal.php';
        </script>
        ";
   

        

}