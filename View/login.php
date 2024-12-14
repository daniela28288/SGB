<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="shortcut icon" href="../img/logo,color.png">
</head>
<body style="background-image:url(../img/freepik__expand__80654.png); background-position: 0%; background-repeat: no-repeat; ">
    <div class="login-wrapper">
        <div class="login-card">
            <div class="brand-logo">
                <img src="../img/logo-horizontal.png" alt="">
            </div>
            <h1 class="title">¡Hola de nuevo!</h1>
            <!-- Formulario con método POST para enviar al controlador -->
            <form method="POST" action="../Controller/LoginController.php">
                <div class="floating-input">
                    <input type="email" name="correo_electronico" id="email" placeholder=" " required>
                    <label for="email">Correo Electrónico</label>
                </div>
                <div class="floating-input password-input">
                    <input type="password" name="contrasena" id="password" placeholder=" " required>
                    <label for="password">Contraseña</label>
                    <img id="togglePassword" class="toggle-password" alt="Toggle visibility">
                </div>

                <button type="submit" class="login-btn">Acceder</button>
            </form>

            <!-- Mensaje de error si las credenciales son incorrectas -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
                <p style="color: red; text-align: center;">Credenciales incorrectas, por favor intenta nuevamente.</p>
            <?php endif; ?>

            <p class="helper-text">¿No tienes cuenta? <a href="./register.php">Registrate aquí </a></p>
        </div>
    </div>
    <script src="../js/login.js"></script> 
</body>
</html>
