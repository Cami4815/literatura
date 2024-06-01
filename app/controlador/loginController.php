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
    function verificarLogin(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
            if(!empty($_POST['name']) && 
                !empty($_POST['password'])){
                    $name=$_POST['name'];
                    $password=$_POST['password'];
                    $users=$this->model->getUsuario($name);
             
                    if($users && password_verify($password,$users->contraseña)){
                        // session_start();
                        // $_SESSION['IS_LOGGED']=true;
                        // $_SESSION['USERNAME']= $users->nombre;
                        // $_SESSION['ROLE']= $users->rol;

                        header("location:" . BASE_URL . "libroTabla");
                    }
                }

    }
 }
 }