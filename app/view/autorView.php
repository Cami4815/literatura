<?php
require_once "view.php";

class autorView extends view{
 

  function tablaAutor($autores){

    // var_dump ($autores); die;
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("autores", $autores);
  $this->smarty->display("autores.tpl");
  }

  function verunAutor($autores){
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("autores", $autores);
    $this->smarty->display("fichadeautor.tpl");
    
  }

  
    
 }
