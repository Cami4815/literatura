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
    function eliminarAutor($id){
        $db=$this->crearConexion();
        $resultado= $db->prepare("DELETE FROM autor WHERE id_autor1 = ?");
        $resultado->execute([$id]);
    }
  

        
    function verunAutor($id){ 
    
        $db=$this->crearConexion();
            $sentencia = $db->prepare("SELECT * FROM autor a WHERE a.id_autor1 = ?");
            $sentencia->execute([$id]);
            $un_autor = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $un_autor;
        }
        function insertarAutor($nombre,$apellido, $nacimiento){
            //abrimos la conexion;
            $db=$this->crearConexion();
           
            //Enviar la consulta
            $resultado= $db->prepare("INSERT INTO autor (nombre,apellido,nacimiento) VALUES (?,?,?)");
            $resultado->execute([$nombre,$apellido, $nacimiento]);

        }
        function editarAutor($nombre,$apellido, $nacimiento, $id){
            $db=$this->crearConexion();
            $resultado= $db->prepare("UPDATE  autor SET nombre = ?, apellido = ?, nacimiento = ? WHERE id_autor1= ?");
            $resultado->execute([$nombre,$apellido, $nacimiento, $id]);

            }
            function getAutorId($id){
                //abrimos la conexion;
                $db = $this->crearConexion();
                //Enviar la consulta
                $sentencia = $db->prepare("SELECT * FROM autor WHERE id_autor1 = ?");
                $sentencia->execute([$id]);
                $autor = $sentencia->fetch(PDO::FETCH_OBJ);
                return $autor;
                 } 
     }
        