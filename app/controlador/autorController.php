<?php
 require_once "app/model/autorModel.php";
 require_once "app/view/autorView.php";
//  require_once "app/view/ErrorView.php";
class autorController {

private $model;
private $view;
// private $err;


public function __construct()
{
    $this->model = new autorModel();
    $this->view = new autorView();
    // $this->err = new ErrorView();
}

function verAutor(){
 
    $autores = $this->model->verAutor();
   
    $this->view->tablaAutor($autores);


}

function verunAutor($id){
    $un_autor=$this->model->mostrarunAutor($id);
    //buscar los autoree
    $this->view->verunAutor($un_autor);
 }
}