<?php
require_once 'app/view/loginView.php';
require_once 'app/model/usuariosModel.php';
class loginController{

    private $model;
    private $view;


    public function __construct()
    {
        $this->model = new usuariosModel();
        $this->view = new loginView();   
          
    }


    function login(){
        $this->view->loginView();
     


    }
    function verificar_usuario(){
     if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['name'])&& !empty($_POST['contraseña'])){
                $name = $_POST['name'];
                $contraseña = $_POST['contraseña'];
                $usuario = $this->model->getUsuario($name);

                if($usuario && password_verify($contraseña, $usuario->contraseña )){

                    session_start();
                    $_SESSION['USERNAME'] = $usuario->name;
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['ROLE'] = $usuario->rol;

                    header("Location:" .BASE_URL. "libroTabla");

             }
         }
    }

     }
 function logout(){
    session_start();
    session_destroy();
    header("Location:" .BASE_URL. "login");
   }
      
     
 }