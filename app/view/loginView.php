<?php
require_once "view.php";

class loginView extends view{
   
    function login($msj = null){
       
        $this->smarty->assign("msj", $msj);
        $this->smarty->display('login.tpl');
        }
         }