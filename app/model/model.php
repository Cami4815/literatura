<?php
require_once "config.php";

class model{ //model general 

    protected $conexion; // por herencia 

    public function __construct(){
        $this->conexion = $this->crearConexion();
    }

    public function crearConexion(){
        
        try{
            $db = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB.";charset=utf8", MYSQL_USER, MYSQL_PASS);
    
        }catch(Exception $e){
            var_dump($e);
        }
    
        return $db;
    }
 }