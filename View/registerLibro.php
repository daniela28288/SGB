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

        <div class="contenedorPadre">
            <div class="columna azul">

                <h2>Información Básica</h2>
                <label for="">
                    Titulo
                    <input type="text" name="titulo" placeholder="Ingrese titulo del libro">
                </label>

                <label for="">
                    Descripcion
                    <input type="text" name="descripcion" placeholder="Ingrese descripción del libro">
                </label>

                <!-- <label for="">
                    <input type="file" name="portada" accept="image/*"> 
                </label> -->

                <div class="file-upload">
                    <input type="file" id="file-input" class="file-input">
                    <label for="">Portada</label>
                    <label for="file-input" class="file-upload-button">
                        <img src="../img/img.png" alt="icono-imagen" style="width: 25px">
                        Seleccionar Archivo
                    </label>
                </div>

                <h2>Autor y Género</h2>

                <label for="autor">
                    Autor
                    <div class="fila">
                    <select name="autor" id="autor" required>
                        <option value="" disabled selected>Seleccione un autor</option>

                        <?php
                        $stmt = $pdo->query('SELECT * FROM autores');
                        $autores = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($autores as $autor):
                        ?>

                        <option value="<?= $autor['id'] ?>">
                            <?= $autor['nombre'] ?>
                        </option>

                        <?php endforeach; ?>

                    </select>

                    <div id="nuevoAutor" class="btnAgregar">
                        <img src="../img/icons8-añadir-30.png" alt="" style="width:15px; height: 15px">
                    </div>
                    </div>
                </label>

                <label for="">
                    Genero 
                    <div class="fila">
                    <select name="genero" id="">
                        <option value="" disabled selected> Seleccione un genero </option>

                        <?php
                        $stmt = $pdo->query('SELECT * FROM generos');
                        $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($generos as $genero):
                        ?>

                        <option value="<?= $genero['id'] ?>">
                            <?= $genero['nombre'] ?>
                        </option>
                        <?php endforeach; ?>
                    </select>

                    <div id="nuevoGenero" class="btnAgregar">
                        <img src="../img/icons8-añadir-30.png" alt="" style="width:15px; height: 15px">
                    </div>

                    </div>
                </label>
                
            </div>

            <div class="columna">
                <br>
                <h2>Publicación</h2>
                <p>Datos editoriales y fecha de publicación.</p>

                <label for="">
                    Editorial
                    <input type="text" name="editorial" placeholder="Ingrese editorial del libro">
                </label>
                <label for="">
                    Año de publicacion
                    <input type="date" name="año">
                </label>
                <label for="">
                    ISBN
                    <input type="text" name="isbn" placeholder="Ingrese ISBN del libro">
                </label>

                <h2>Inventario</h2>
                <p>Estado y cantidad en stock.</p>
                <label for="">
                    Estado
                    <input type="text" name="estado" placeholder="Estado del libro">
                </label>
                <label for="">
                    Cantidad
                    <input type="number" min="1" name="cantidad" placeholder="Ingrese cantidad de stock">
                </label>

                <button type="submit">Guardar libro</button>
            </div>
        </div>
        <br>

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