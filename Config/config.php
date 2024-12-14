<?php
class Database {
    private static $connection;

    // Método para obtener la conexión a la base de datos
    public static function getConnection() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO('mysql:host=localhost;dbname=SGB', 'root', '');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}

