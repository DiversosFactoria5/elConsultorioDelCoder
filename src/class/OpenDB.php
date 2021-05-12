<?php

//datos de connexion a la base de datos MySQL
$servidor = "localhost";
$usuario = "root";
$password = "";
$nameDatabase = "consultant";


// conectar a la base de datos y verificar si la connexion es correcta
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$nameDatabase", $usuario, $password);      
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada Satisfactoriamente";
}

catch(PDOException $e)
{
    echo "La conexión ha fallado: " . $e->getMessage();
}