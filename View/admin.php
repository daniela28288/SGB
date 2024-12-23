<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Dashboard Librería Digital</title>
    <link rel="stylesheet" href="styles/admin.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo,color.png">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="img/logo-blanco.png" alt="Logo">
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <!-- <span class="material-icons">book</span> -->
                    Catálogo de Libros
                </a>
            </li>
            <li>
                <a href="#">
                    <!-- <span class="material-icons">swap_horiz</span> -->
                    Préstamos
                </a>
            </li>
            <li>
                <a href="#">
                    <!-- <span class="material-icons">add_box</span> -->
                    Añadir Libro
                </a>
            </li>
            <li>
                <a href="#">
                    <!-- <span class="material-icons">update</span> -->
                    Actualizar Libro
                </a>
            </li>
            <li>
                <a href="#">
                    <!-- <span class="material-icons">library_books</span> -->
                    Gestionar Devoluciones
                </a>
            </li>
        </ul>
    <a href="">
        <!-- <span id="logout-button" class="material-icons">exit_to_app</span>  -->
        Cerrar sesión</a>
    </div>




    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header>
            <h1>Bienvenido al Dashboard, Admin</h1>
        </header>

        <h4>Libros registrados</h4>
             <!-- Books Display -->
        <div class="books-container">
            <div class="book-card">
                <img class="librito" src="img/Bajo la misma estrella, de John Green, excelente libro para adolescentes.jpg" alt="Imagen de libro">
                <h3>Bajo la misma...</h3>
            </div>
            <div class="book-card">
                <img class="librito" src="img/Book cover children illustration.jpg" alt="Imagen de libro">
                <h3>Las aventuras...</h3>
            </div>
            <div class="book-card">
                <img class="librito" src="img/BOULEVARD ­ƒîê­ƒÜ¼­ƒÆ½.jpg" alt="Imagen de libro">
                <h3>Boulevard</h3>
            </div>
            
            <div class="book-card">
                <img class="librito" src="img/ee481afe-98e2-4743-a58f-1650841dd894.jpg" alt="Imagen de libro">
                <h3>Matilda</h3>
            </div>
            <div class="book-card">
                <img class="librito" src="img/Libros que todas amamos y que este a+¦o ser+ín pel+¡culas.jpg" alt="Imagen de libro">
                <h3>Mujercitas</h3>
            </div>
                    <!-- Button to Add New Book -->
        <button class="btn-add-book">+ Nuevo Libro</button>
        </div>


        <!-- Formulario de Añadir/Actualizar Libro -->
        <div class="book-form">
            <h2>Añadir o Actualizar Libro</h2>
            <form>
                <input type="text" placeholder="Título del Libro" required>
                <input type="text" placeholder="Autor" required>
                <input type="text" placeholder="Género" required>
                <input type="number" placeholder="Año de Publicación" required>
                <textarea placeholder="Descripción del Libro" rows="4" required></textarea>
                <select>
                    <option value="disponible">Disponible</option>
                    <option value="prestado">Prestado</option>
                </select>
                <button type="submit">Guardar Libro</button>
            </form>
        </div>

       
    </div>

</body>
</html>
