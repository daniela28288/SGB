<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="icon" href="../img/logo,color.png">
</head>
<body style="background-image:url(../img/freepik__expand__80654.png); background-position: 0%; background-repeat: no-repeat;">
    <div class="login-wrapper">
        <div class="login-card">
            <div class="brand-logo">
                <img src="../img/logo-horizontal.png" alt="Logo">
            </div>

            <h1 class="title">Registro de usuario</h1>
            <form action="register.php" method="POST">
                <!-- Campo para el nombre completo -->
                <div class="floating-input">
                    <input type="text" id="fullname" name="fullname" placeholder=" " required>
                    <label for="fullname">Nombre completo</label>
                </div>

                <!-- Campo para el número de documento -->
                <div class="floating-input">
                    <input type="text" id="documentNumber" name="documentNumber" placeholder=" " required>
                    <label for="documentNumber">Número de documento</label>
                </div>

                <!-- Campo para el rol -->
                <div class="floating-input">
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Seleccione su rol</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Docente">Docente</option>
                        <option value="Bibliotecario">Bibliotecario</option>
                    </select>
                </div>

                <!-- Campo para el teléfono -->
                <div class="floating-input">
                    <input type="tel" id="phone" name="phone" placeholder=" " required>
                    <label for="phone">Teléfono</label>
                </div>

                <!-- Campo para correo electrónico -->
                <div class="floating-input">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">Correo electrónico</label>
                </div>

                <!-- Campo para contraseña -->
                <div class="floating-input password-input">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password">Contraseña</label>
                    <img id="togglePassword" class="toggle-password" alt="Toggle transparency">
                </div>

                <!-- Botón de registro -->
                <button type="submit" class="login-btn">Registrarse</button>
            </form>
            <p class="helper-text">¿Tienes una cuenta? <a href="./login.php">Inicia sesión aquí</a></p>
        </div>
    </div>

    <script src="../js/login.js"></script>

</body>
</html>
