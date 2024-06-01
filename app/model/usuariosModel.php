<?php
require_once 'conexion.php';
class usuariosModel {
   
   
    function getUsuario($name){
    $db = createConexion();

    $sentencia = $db->prepare("SELECT * FROM inicio_sesion WHERE nombre = ?");
    $sentencia->execute([$name]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);
    return $usuarios;
 }
}
