<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo,color.png">
    <title>Pantalla principal</title>
    <link rel="stylesheet" href="styles/index.css">
    
</head>
<body>
    <div class="cabecera">
        <div class="container">
            <img id="logo" src="img/logo-blanco.png" alt="">
            <button><a href="view/login.php" id="naveg">Inicia Sesión</a></button>
            <button><a href="view/register.php" id="naveg">Registrate</a></button>
        </div>
        
        <a href="./View/pantallaPrincipal.php"><h4>Ingresa como invitado</h4></a>
    </div>
    <div class="container-info">
        <h1>Bienvenido a Book Club</h1>
        <h3>El lugar donde las historias, el conocimiento y la inspiración están a solo un clic de distancia. Encuentra tu próxima aventura</h3>
        <!-- <div class="carruselLibros">
            <div class="libros"><img src="img/15 Libros para leer en un fin de semana; no todo es Netflix.jpg" alt=""></div>
            <div class="libros"><img src="img/BOULEVARD 🌈🚬💫.jfif" alt=""></div>
            <div class="libros"><img src="img/descarga (7).jfif" alt=""></div>
        </div> -->
        <div class="carrusel-container">
            <div class="carrusel">
                <img src="img/15 Libros para leer en un fin de semana; no todo es Netflix.jpg" alt="Libro 1" class="imagen">
                <img src="img/Bajo la misma estrella, de John Green, excelente libro para adolescentes.jpg" alt="Libro 2" class="imagen">
                <img src="img/BOULEVARD ­ƒîê­ƒÜ¼­ƒÆ½.jpg" alt="Libro 3" class="imagen">
                <img src="img/15 Libros que le+¡ste antes de cumplir 17 a+¦os y jam+ís olvidar+ís.jpg" alt="Libro 4" class="imagen">
                <img src="img/Book cover children illustration.jpg" alt="Libro 5" class="imagen">
                <img src="img/Libros que todas amamos y que este a+¦o ser+ín pel+¡culas.jpg" alt="Libro 6" class="imagen">
                <img src="img/ee481afe-98e2-4743-a58f-1650841dd894.jpg" alt="Libro 7" class="imagen">
            </div>
            <br><br>
            <button class="prev" onclick="moverCarrusel(-1)">&#10094;</button>
            <button class="next" onclick="moverCarrusel(1)">&#10095;</button>
        </div>
    </div>
    


    <script src="js/index.js"></script>
</body>
</html>