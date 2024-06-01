<?php
require_once "conexion.php";

class autorModel{ 

    
    function verAutor(){ 
        $db = createConexion();
        $sentencia = $db->prepare("SELECT * FROM autor");
            $sentencia->execute();
            $autores = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $autores;
    }
        //  function insertAutor($nombre,$apellido, $nacimiento){
        //     //abrimos la conexion;
        //     $db = createConexion();
           
        //     //Enviar la consulta
        //     $resultado= $db->prepare("INSERT INTO autores (nombre,apellido,nacimiento) VALUES (?,?,?,?,?,?)");
        //     $resultado->execute([$nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas, 1]); // ejecuta
        // }
     }
        