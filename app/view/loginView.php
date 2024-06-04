<?php
require_once "view.php";

class loginView extends view{
   
    function loginView($msj = NULL){
       
        $this->smarty->assign("msj", $msj);
        $this->smarty->display('login.tpl');
        }
         }
?> 














