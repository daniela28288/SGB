<?php
session_start();

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo_electronico = ?");
    $stmt->execute([$email]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($email && password_verify($password, $usuario['contrasena'])) {
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['identificacion'] = $usuario['numero_documento'];
        $_SESSION['rol'] = $usuario['rol'];
        $_SESSION['telefono'] = $usuario['telefono'];
        $_SESSION['email'] = $usuario['email'];

        header('Location: view/pantallaPrincipal.php');

    } else {
        echo "
            <script>
            alert('CREDENCIALES INCORRECTAS');
            window.location.href = 'view/login.php';
            </script>
        ";
    }
}