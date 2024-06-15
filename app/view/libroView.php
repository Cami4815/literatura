<?php
require_once "view.php";
class libroView extends view{

 
    function mostrarTabla($libro, $autor){
      $this->smarty->assign("libro",$libro);
      $this->smarty->assign("autor",$autor);
      $this->smarty->display('libroTabla.tpl');
     }
     function mostrarLibro($libro){
        $this->smarty->assign("libro",$libro);
        $this->smarty->display('libros.tpl');
      }
      
    function EditarLibro($libro){
      $this->smarty->assign('libro', $libro);
      $this->smarty->display('editarLibro.tpl');
     }
     function verunAutorLibros($libros){
      $this->smarty->assign("base", BASE_URL);
      $this->smarty->assign("libro", $libros);
      $this->smarty->display("fichadeLibros.tpl");
      
    }
    function getLibroId($libro){
      $this->smarty->assign("base", BASE_URL);
      $this->smarty->assign("libro", $libro);
      $this->smarty->display("libro.tpl"); 
    }
}