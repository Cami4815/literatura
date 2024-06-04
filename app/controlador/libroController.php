<?php
require_once "app/model/libroModel.php";
require_once "app/view/libroView.php";
require_once "app/model/autorModel.php";
require_once "app/controlador/autorController.php";
//  require_once "app/view/ErrorView.php";
class libroController
{

    private $model;
    private $view;
    // private $err;

    public function __construct()
    {
        $this->model = new libroModel();
        $this->view = new libroView();
        // $this->err = new ErrorView();
    }

    function mostrarTabla()
    {        ;
        $libro = $this->model->verLibros();
        $this->view->mostrarTabla($libro);


    }

    function mostrarLibro()
    {
        $libro = $this->model->verLibros();

        $this->view->mostrarLibro($libro);

    }

    function insertLibro()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (
                !empty($_POST['nombre']) &&
                !empty($_POST['fecha']) &&
                !empty($_POST['genero']) &&

                isset($_POST['precio']) &&

                isset($_POST['paginas']) &&

                isset($_POST['autor_libro'])

            ) {
                $nombre = $_POST['nombre'];
                $fechadepublicacion = $_POST['fecha'];
                $genero = $_POST['genero'];
                $precio = $_POST['precio'];
                $cantidadepaginas = $_POST['paginas'];
                $autores1 = $_POST['autor_libro'];


                $this->model->insertLibro($nombre, $fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1);

                header("Location:" . BASE_URL . "libroTabla");
            } else {
                echo "faltan datos";
            }
        }
    }

    function deleteLibro($id)
    {
        $libro_borrar = $this->model->deleteLibro($id);
        // Pasa el ID al método deleteLibro()
        header("Location:" . BASE_URL . "libroTabla");

    }
    function EditarLibro($id)
    { //LLEVA AL FORM PARA EDITAR EL LIBRO
        $libro = $this->model->getLibroId($id);
        $this->view->EditarLibro($id);


    }
    function getLibroId($id)
    {
        $libro = $this->model->getLibroId($id);
        $this->view->getLibroId($libro);
    }

    function verificarLibro($id)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (
                !empty($_POST['nombre']) &&
                !empty($_POST['fecha']) &&
                !empty($_POST['genero']) &&

                isset($_POST['precio']) &&

                isset($_POST['paginas']) &&

                isset($_POST['autor_libro'])

            ) {
                $nombre = $_POST['nombre'];
                $fechadepublicacion = $_POST['fecha'];
                $genero = $_POST['genero'];
                $precio = $_POST['precio'];
                $cantidadepaginas = $_POST['paginas'];
                $autores1 = $_POST['autor_libro'];


                $this->model->EditarLibro($nombre, $fechadepublicacion, $genero, $precio, $cantidadepaginas, $autores1, $id);
                header("Location:" . BASE_URL . "tablaLibros");
            }
        }

    }
    function verunAutorLibros($id)
    {
        $varios_libros = $this->model->verunAutorLibros($id);

        $this->view->verunAutorLibros($varios_libros);

    }
}