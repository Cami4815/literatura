<?php
require_once "libs/Smarty.class.php";
require_once "helpers/AuthHelpers.php";

class view{
    protected $smarty;
    
    function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->assign("base", BASE_URL);
        $this->smarty->assign("loageado", AuthHelpers::isLogged());
        $this->smarty->assign("usuario", AuthHelpers:: userName());
    }
}