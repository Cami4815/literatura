<?php
 require_once "app/model/autorModel.php";
 require_once "app/view/autorView.php";
//  require_once "app/view/ErrorView.php";
class autorController {

private $model;
private $view;
private $err;


public function __construct()
{
    $this->model = new autorModel();
    $this->view = new autorView();
    // $this->err = new ErrorView();
}

function verAutor()
    {   if(AuthHelpers::checkLogged()){ 
 
    $autores = $this->model->verAutor();
    $this->view->tablaAutor($autores);
     }
}

function verunAutor($id){
    $un_autor=$this->model->verunAutor($id);
    //buscar los autoree
    $this->view->verunAutor($un_autor);
 }
 function eliminarAutor($id)
    {
        $autor_borrar = $this->model->eliminarAutor($id);
        // Pasa el ID al método deleteLibro()
        header("Location:" . BASE_URL . "autores");

    }

    function insertarAutor(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (
                !empty($_POST['nombre']) &&
                !empty($_POST['apellido']) &&
                !empty($_POST['nacimiento'])

            ) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $nacimiento = $_POST['nacimiento'];
                $this->model->insertarAutor($nombre, $apellido, $nacimiento);

                header("Location:" . BASE_URL . "autores");
            } else {
                echo "faltan datos";
            }
        }
}



function verificarAutor(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (
        
            !empty($_POST['nombre']) &&
            !empty($_POST['apellido']) &&
            !empty($_POST['nacimiento'])

        ) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $nacimiento = $_POST['nacimiento'];
            $id = $_POST['id'];
            
            $this->model->editarAutor($nombre, $apellido, $nacimiento, $id);

            header("Location:" . BASE_URL . "autores");
        } else {
            echo "faltan datos";
        }
    }
}
function editarAutor($id)
{ //LLEVA AL FORM PARA EDITAR EL LIBRO
    $autor = $this->model->getAutorId($id);
    $this->view->editarAutor($autor);
 }
 function getAutorId($id) {   
        
    $autor = $this->model->getAutorId($id);
    $this->view->getAutorId($autor);

}

  }