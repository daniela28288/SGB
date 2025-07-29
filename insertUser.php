<?php

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $documentNumber = $_POST['documentNumber'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios(nombre, numero_documento, rol, telefono, correo_electronico, contrasena) VALUES(?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullname, $documentNumber, $role, $phone, $email, $password]);

    if (!empty($stmt)) {
        echo "
            <script>
            alert('USUARIO REGISTRADO CON EXITO');
            window.location.href = 'view/login.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('ERROR DE REGISTRO');
            window.location.href = 'view/register.php';
            </script>
        ";
    }
}