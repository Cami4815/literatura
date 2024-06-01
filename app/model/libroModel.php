<?php
require_once "conexion.php";

class libroModel{ 

    
    function verLibros(){ 
        $db = createConexion();
        $sentencia = $db->prepare("SELECT * FROM libro");
            $sentencia->execute();
            $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $libros;
    }
         function insertLibro($nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas){
            //abrimos la conexion;
            $db = createConexion();
           
            //Enviar la consulta
            $resultado= $db->prepare("INSERT INTO libro (nombre,fecha_publicacion,genero,precio,cantidad_pag, id_autor) VALUES (?,?,?,?,?,?)");
            $resultado->execute([$nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas, 1]);
            return $libro; // ejecuta
        }
        
        function deleteLibro($id){
            $db = createConexion();
            $resultado= $db->prepare("DELETE FROM libro WHERE id = ?");
            $resultado->execute([$id]);
    
        
        }
        function verGenero($id){
            $db = createConexion();
            $sentencia= $db->prepare("DELETE FROM libro l WHERE l.id_libro = ?");
            $sentencia->execute([$id]);
            $genero=$sentencia->fetChALL(PDO::FETCH_OBJ);
            return $genero;
         }

        
      
        function mostrarLibro(){ 
            $db = createConexion();
            $sentencia = $db->prepare("SELECT * FROM libro");
                $sentencia->execute();
                $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
                return $libros;
        }
}
