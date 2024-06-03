<?php
require_once 'app/model/model.php';
class usuariosModel extends model {
   
   
    public function getUsuario($name){
    $db=$this->crearConexion();

    $sentencia = $db->prepare("SELECT * FROM inicio_sesion WHERE nombre = ?");
    $sentencia->execute([$name]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    return $usuario;
 }
}
