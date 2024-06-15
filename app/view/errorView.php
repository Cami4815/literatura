<?php
require_once "view.php";

class errorView extends view{
   
    function mostrarErr($msj){
       
        $this->smarty->assign("msj", $msj);
        $this->smarty->display('error.tpl');
        }
         }