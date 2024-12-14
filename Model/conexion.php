<?php

class BD{
    function conexion(){
    include '../config/config.php';
    try {
    $conn = new PDO ($dsn, $username, $password );
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("conexion exitosa <br>");
    
    }

    catch(PDOEXception $e){
    echo 'Error: '. $e -> getMessage();
    }

    }
}
// $consulta = $conn ->prepare("SELECT * FROM libros") ;
// $consulta ->execute();
// $statemet = $consulta ->fetchAll();
// // var_dump($statemet);
// // die();
// foreach ($statemet as $users){
//     echo $users['titulo']. "<br>";
// } 
//     }
// }

$conn = new BD ();
$conn -> conexion();
