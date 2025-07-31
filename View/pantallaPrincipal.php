<?php
session_start(); 
require '../conexion.php';

if (!isset($_SESSION['nombre'])) {
    header("Location: ../view/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Club</title>
    <link rel="stylesheet" href="../styles/pantallaPrincipal.css">
    <link rel="shortcut icon" href="../img/logo,color.png">
</head>
<body>
    <div class="barraAzul">
        <div class="contenido">
            <div class="iconos">
                <img src="../img/icons8-whatsapp-50.png" alt="Icono de whatsapp">
                <img src="../img/icons8-facebook-nuevo-50.png" alt="Icono de facebook">
                <img src="../img/icons8-twitter-50.png" alt="Icono de twitter"> 
            </div>
            <h6>|</h6>
            <h4>+57 322 153 2356</h4>
        </div>
        <div class="contenido">
            <img src="../img/email.png" alt="Icono de correo">
            <h4>servicioalciudadano@sena.edu.co.</h4>
            <h6>|</h6>
            <h4>servicioalciudadano@sena.edu.co.</h4>
        </div>
    </div>
    <div class="cabecera">
        <img class="logo" src="../img/logo-horizontal.png" alt="">
        <div class="opciones">
            <h4>INICIO</h4>
            <h4>OTRA OPCION</h4>
            <h4>OTRA OPCION</h4>
        </div>
        <div class="usuario">
            <img class="iconUser" src="../img/icons8-usuario-96.png" alt="">
            <a href="../logout.php" id="boton-logout">Cerrar sesion</a>
        </div>
    </div>


    <div class="buscador">
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="¿Qué estás buscando?">
            <button id="searchButton">Buscar</button>
        </div>
        <div id="searchResults" class="results-container"></div>
    </div>


     <div class="container-banner">
         <img src="../img/banner1233.png" alt=""> 
    </div> 

    <div class="catalogo-libros">
        <h2>Catalogo de libros</h2>

          
          <?php if ($_SESSION['rol'] == "Bibliotecario") { ?>
            <div class="tools">
                <a href="registerLibro.php" class="btnTools" id="libro">
                    <img src="../img/icons8-añadir-30.png" alt="" style="width:15px; height: 15px">
                    Agregar libro
                </a>

                <a href="registerLibro.php" class="btnTools autor">
                    <img src="../img/icons8-añadir-30.png" alt="" style="width:15px; height: 15px">
                    Autores
                </a>

                <a href="registerLibro.php" class="btnTools genero">
                    <img src="../img/icons8-añadir-30.png" alt="" style="width:15px; height: 15px">
                    Generos
                </a>
            </div>
           <?php } ?>
        

        <div class="imagenes">

            <?php
                $stmt = $pdo->query("SELECT * FROM libros");
                $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (empty($libros)){ ?>

                    <h3 style ="color: gray; font-weight: 100">No hay libros disponibles</h3>

              <?php  }

                foreach ($libros as $libro):
            ?>
            <div class="libro">
                <div class="imagen">
                    <img src="<?= '../' . $libro['imagen']?>" alt="">
                </div>
                <h5><?= $libro['titulo'] ?></h5>
                <div class="descripcion">
                    <?= $libro['descripcion'] ?>
                </div>
                <button id="boton-prestar">Prestar libro</button>
            </div>

            <?php endforeach; ?>
        </div>

    </div>

    <footer>
        <div class="informacion">
            <div class="tema">
                <h2>Book Club</h2>
                <p>
                    Explora un mundo de conocimiento desde cualquier lugar. Accede a recursos digitales, libros, y herramientas para tu aprendizaje continuo.
                </p>
            </div>
            <div class="links">
                <h3>Enlaces Útiles</h3>
                <a href="#">Inicio</a>
                <a href="#">Catálogo</a>
                <a href="#">Mi Cuenta</a>
                <a href="#">Ayuda</a>
                <a href="#">Contacto</a>
            </div>
            <div class="direccion">
                <h3>Contacto</h3>
                <h5>📍 Avenida Conocimiento 456, Ciudad Digital</h5>
                <h5>📞 +1 800 555 1234</h5>
                <h5>✉️ libreriadigital.com</h5>
            </div>
            <div class="redes-s">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="#"><img src="../img/icons8-facebook-nuevo-50.png" alt="Facebook"></a>
                    <a href="#"><img src="../img/icons8-twitter-50.png" alt="Twitter"></a>
                    <a href="https://wa.me/573024581882"><img src="../img/icons8-whatsapp-50.png" alt="Whatsapp"></a>
                </div>
            </div>
        </div>
        <div class="derechos">
            &copy; 2024 Biblioteca digital Book Club.
        </div>
    </footer>

<script src="../js/pantallaPrincipal.js"></script>
</body>
</html>