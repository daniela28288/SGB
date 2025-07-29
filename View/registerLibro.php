<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Libro</title>
    <link rel="stylesheet" href="../styles/registerLibro.css">
</head>
<body>

    <form action="../insertLibro.php" method="POST" enctype="multipart/form-data">

        <label for="autor">Seleccione un autor:</label>
        <select name="autor" id="autor" required>
            <option value="">Seleccione un autor</option>

            <?php
            $stmt = $pdo->query('SELECT * FROM autores');
            $autores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($autores as $autor):
            ?>
                <option value="<?= $autor['id'] ?>"><?= $autor['nombre'] ?></option>
            <?php endforeach; ?>
        </select>

        <div id="nuevoAutor" class="btnAgregar">Nuevo autor</div> <br>

        <label for="">Genero</label>
        <select name="genero" id="">
            <option value=""> Seleccione un genero </option>

            <?php
            $stmt = $pdo->query('SELECT * FROM generos');
            $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($generos as $genero):
            ?>
                <option value="<?= $genero['id'] ?>"><?= $genero['nombre'] ?></option>
            <?php endforeach; ?>
        </select>

        <div id="nuevoGenero" class="btnAgregar">Nuevo genero</div> <br>

        
        <label for="">
            Titulo
            <input type="text" name="titulo">                
        </label>
        <label for="">
            Descripcion
            <input type="text" name="descripcion">
        </label>
        <label for="">
            Editorial
            <input type="text" name="editorial">
        </label>
        <label for="">
            Año de publicacion
            <input type="date" name="año">
        </label>
        <label for="">
            ISBN
            <input type="text" name="isbn">
        </label>
        <label for="">
            Portada
            <input type="file" name="portada" accept="image/*"> 
        </label>
        <label for="">
            Estado
            <input type="text" name="estado">
        </label>
        <label for="">
            Cantidad
            <input type="number" min="1" name="cantidad">
        </label>    

        <br>
        <button type="submit">Guardar libro</button>
    </form>

        <!-- este es el modal de agregar autor -->
        <div class="modal" id="modalAutores">
            <h4 id="cerrar1">cerrar</h4>
            <form action="../insertAutor.php" method="POST">
                <input type="text" placeholder="Nombre" name="nombre" require>
                <button type="submit">Agregar autor</button>
            </form>
        </div>


         <!-- este es el modal de agregar generos -->
        <div class="modal" id="modalGeneros">
            <h4 id="cerrar2">cerrar</h4>
            <form action="../insertGenero.php" method="POST">
                <input type="text" placeholder="Nombre" name="nombre" require>
                <button type="submit">Agregar genero</button>
            </form>
        </div>

    <script src="../js/registerLibro.js"></script>
</body>
</html>
