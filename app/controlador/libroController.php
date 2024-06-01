<?php
 require_once "app/model/libroModel.php";
 require_once "app/view/libroView.php";
 require_once "app/model/autorModel.php";
//  require_once "app/view/ErrorView.php";
class libroController {

private $model;
private $view;
// private $err;

public function __construct()
{
    $this->model = new libroModel();
    $this->view = new libroView();
    // $this->err = new ErrorView();
}

function  mostrarTabla(){
 
    $libro = $this->model->verLibros();
    $this->view->mostrarTabla($libro);


}

function mostrarLibro(){
    $libro=$this->model->verLibros();
   
    $this->view->mostrarLibro($libro);

 }

 function insertLibro(){

    if($_SERVER["REQUEST_METHOD"] == "POST"){
          
        if(!empty($_POST['nombre']) && 
            !empty($_POST['fecha']) &&
            !empty($_POST['genero']) && 

            isset($_POST['precio']) &&
        
            isset($_POST['paginas']) &&
             
             !empty($_POST['autor'])
        ){
              $nombre = $_POST['nombre'];
              $fechadepublicacion =$_POST ['fecha'];
              $genero = $_POST['genero'];
              $precio =$_POST ['precio'];
              $cantidadepaginas = $_POST['paginas'];
              $autor = $_POST['autor'];
             
    
              $libro=$this->model->insertLibro($nombre,$fechadepublicacion, $genero, $precio, $cantidadepaginas, $autor);
              
              header("Location:".BASE_URL."libroTabla");
          }else{
              echo "faltan datos";   
               } 
          }
 }
 
        function deleteLibro($id){
            $this->model->deleteLibro($id);
         // Pasa el ID al método deleteLibro()
            header("Location:".BASE_URL."home");
         
         }
         function verGenero($id){
            $genero=$this->model->verGenero($id);
            $this->view->verGenero($genero);

         }
         
     }