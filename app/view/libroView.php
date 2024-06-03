<?php
require_once "view.php";
class libroView extends view{

 
    function mostrarTabla($libro){
    // var_dump ($libro); die;

     
      $this->smarty->assign("libro",$libro);
      $this->smarty->display('libroTabla.tpl');



     }
     function mostrarLibro($libro){
      // var_dump ($libro); die;
  
       
        $this->smarty->assign("libro",$libro);
        $this->smarty->display('libros.tpl');
  

      }
      
    function EditarLibro($libro){
      $this->smarty->assign('libro', $libro);
      $this->smarty->display('editarLibro.tpl');
     }
     function verunAutorLibros($libros){
      $this->smarty->assign("base", BASE_URL);
      $this->smarty->assign("libro", $libro);
      $this->smarty->display("fichadeLibros.tpl");
      
   }



      }