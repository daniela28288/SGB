<?php

class Usuario {
    private $nombreCompleto;
    private $documento;
    private $rol;
    private $telefono;
    private $correo;
    private $contrasena;

    public function __construct($nombreCompleto, $documento, $rol, $telefono, $correo, $contrasena) {
        $this->nombreCompleto = $nombreCompleto;
        $this->documento = $documento;
        $this->rol = $rol;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT); 
    }

    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }
}

class Registro {
    private $error = [];

    public function validar($data) {
        if (empty($data['fullname']) || strlen($data['fullname']) < 5) {
            $this->error['fullname'] = 'El nombre completo es obligatorio y debe tener al menos 5 caracteres.';
        }

        if (empty($data['documentNumber']) || !is_numeric($data['documentNumber'])) {
            $this->error['documentNumber'] = 'El número de documento es obligatorio y debe ser numérico.';
        }

        if (empty($data['role']) || !in_array($data['role'], ['estudiante', 'profesor', 'bibliotecario'])) {
            $this->error['role'] = 'Debe seleccionar un rol válido.';
        }

        if (empty($data['phone']) || !preg_match('/^\d{10}$/', $data['phone'])) {
            $this->error['phone'] = 'El número de teléfono debe tener 10 dígitos.';
        }

        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error['email'] = 'El correo electrónico es inválido.';
        }

        if (empty($data['password']) || strlen($data['password']) < 6) {
            $this->error['password'] = 'La contraseña debe tener al menos 6 caracteres.';
        }

        return $this->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'fullname' => $_POST['fullname'],
        'documentNumber' => $_POST['documentNumber'],
        'role' => $_POST['role'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    $registro = new Registro();
    $errores = $registro->validar($data);

    if (empty($errores)) {
        $usuario = new Usuario($data['fullname'], $data['documentNumber'], $data['role'], $data['phone'], $data['email'], $data['password']);
        
        echo "Registro exitoso!";
    } else {
        foreach ($errores as $campo => $error) {
            echo "<p>$error</p>";
        }
    }
}

