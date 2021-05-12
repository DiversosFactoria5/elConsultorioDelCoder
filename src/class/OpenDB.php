<?php

namespace App;

use PDO;
use PDOException;

class ConexionBD
{

    public $mysql;
    
    public function __construct()
    {
        // conectar a la base de datos y verificar si la connexion es correcta
        try {
        $this->mysql = $this->getConnection();
        
        echo "Conexión realizada Satisfactoriamente";
        }

        catch(PDOException $e)
        {
        echo "La conexión ha fallado: " . $e->getMessage();
        }

    }


    private function getConnection()
    {
        //datos de connexion a la base de datos MySQL
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $nameDatabase = "consultant";
        $conexion = new PDO("mysql:host=$servidor;dbname=$nameDatabase", $usuario, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    }

    

}

