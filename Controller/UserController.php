<?php
require_once '../Model/User.php';

class UserController {

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre_completo = $_POST['fullname'];
            $numero_documento = $_POST['documentNumber'];
            $tipo_usuario = $_POST['role'];
            $telefono = $_POST['phone'];
            $correo_electronico = $_POST['email'];
            $contrasena = $_POST['password'];

            // Crear una instancia del modelo
            $user = new User();

            // Intentar registrar el usuario
            if ($user->register($nombre_completo, $numero_documento, $tipo_usuario, $telefono, $correo_electronico, $contrasena)) {
                echo "Usuario registrado exitosamente.";
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    }
}
?>
