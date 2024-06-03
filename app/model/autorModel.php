<?php
require_once "app/model/model.php";

class autorModel extends model{ 

    
    function verAutor(){ 
        $db=$this->crearConexion();
        $sentencia = $db->prepare("SELECT * FROM autor");
            $sentencia->execute();
            $autores = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $autores;
    }
  

        
    function mostrarunAutor($id){ 
    
        $db=$this->crearConexion();
            $sentencia = $db->prepare("SELECT * FROM autor a WHERE a.id_autor1 = ?");
            $sentencia->execute([$id]);
            $un_autor = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $un_autor;
        }
    
     }
        