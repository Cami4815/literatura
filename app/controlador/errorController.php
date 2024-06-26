<?php
require_once "app/view/errorView.php";
class errorController {
    private $err;
    public function __contruct()
    { 
        $this->err=new errorView();
    }
    function mostrarErr($){
        $this->err->mostrarErr($);
        
    }
}