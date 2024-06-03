<?php
require_once "app/model/model.php";

class libroModel extends model{ 

    
    public function verLibros(){ 
        $db=$this->crearConexion();
        
        $sentencia = $db->prepare("SELECT * FROM libro");
            $sentencia->execute();
            $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $libros;
    }
         function insertLibro($nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1,){
            //abrimos la conexion;
            $db=$this->crearConexion();
           
            //Enviar la consulta
            $resultado= $db->prepare("INSERT INTO libro (nombre,fecha_publicacion,genero,precio,cantidad_pag, id_autor) VALUES (?,?,?,?,?,?)");
            $resultado->execute([$nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1,]);
            return $libro; // ejecuta
        }
        
        function deleteLibro($id){
            $db=$this->crearConexion();
            $resultado= $db->prepare("DELETE FROM libro WHERE id_libro = ?");
            $resultado->execute([$id]);
            return $libro;
        }

        function EditarLibro($nombre, $fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1, $id){
            $db=$this->crearConexion();
            $resultado= $db->prepare("UPDATE libro SET nombre = ?, fecha_publicacion = ?, genero = ?, precio = ?,  cantidad_pag = ?, id_autor = ? WHERE id_libro = ?");
            $resultado->execute([$nombre, $fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1, $id]);

            }

        function getLibroId($id){
        //abrimos la conexion;
        $db = $this->crearConexion();
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM libro WHERE id_libro = ?");
        $sentencia->execute([$id]);
        $libro = $sentencia->fetch(PDO::FETCH_OBJ);
        return $libro;
         } 

         function verunAutorLibros(){ 
            $db=$this->crearConexion();
            $sentencia = $db->prepare("SELECT * FROM libros l WHERE l.id_libro = ? ");
                $sentencia->execute([$id]);
                $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
                return $libros;
         }
      
        function mostrarLibro(){ 
            $db=$this->crearConexion();
            $sentencia = $db->prepare("SELECT * FROM libro");
                $sentencia->execute();
                $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
                return $libros;
        }
}
