<?php
require_once '../Config/config.php';

class User {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function register($nombre_completo, $numero_documento, $tipo_usuario, $telefono, $correo_electronico, $contrasena) {
        if (empty($nombre_completo) || empty($numero_documento) || empty($tipo_usuario) || empty($telefono) || empty($correo_electronico) || empty($contrasena)) {
            echo "Todos los campos son obligatorios.";
            return false; 
        }

        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

        try {
            $query = "SELECT * FROM usuarios WHERE correo_electronico = :correo_electronico OR numero_documento = :numero_documento";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':correo_electronico', $correo_electronico);
            $stmt->bindParam(':numero_documento', $numero_documento);
            $stmt->execute();

            $query = "INSERT INTO usuarios (nombre, numero_documento, tipo, telefono, correo_electronico, contrasena)
                      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$nombre_completo, $numero_documento, $tipo_usuario, $telefono, $correo_electronico, $hashed_password]);

            return true; // Registro exitoso
        } catch (PDOException $e) {
            return false;
        }
    }
}
