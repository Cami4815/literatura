<?php
require_once "app/controlador/libroController.php";
require_once "app/controlador/autorController.php";
require_once "app/controlador/loginController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    //  print_r($parametro);
    switch ($parametro[0]) {

        case 'login':
            $controller=new loginController();
            $controller->login();
            break;
        case 'verificar_usuario':
            $controller=new loginController();
            $controller->verificar_usuario();
                break;

        case 'CerrarSesion':
            $controller=new loginController();
            $controller->logout();
                break;

        case 'libroTabla':
            
            $controller = new libroController();
            $controller->mostrarTabla();
         break;

        case 'autores':
            $controller = new autorController();
            $controller->verAutor();
         break;    

        case 'verunAutor':
            $controller=new autorController();
            $controller->verunAutor($parametro[1]);
            break;

        case 'verunAutorLibros':
            $controller=new autorController();
            $controller->verunAutorLibros($id);
             break;

        case 'insertLibro':
            $controller= new libroController();
            $controller-> insertLibro();
            break;

        case 'mostrarLibro':
             $controller = new libroController();
            $controller->mostrarLibro();
                break;
        
        case 'delete':
            $controller = new libroController();
            $controller->deleteLibro($parametro[1]);
                break;

        case 'editar':
            $controller = new libroController();
             $controller->EditarLibro($parametro[1]); 
        break;

        case'getLibroId':
            $controller =new libroController();
            $controller->getLibroId($parametro);
        break;

        case 'verificarLibro':
            $controller=new libroController();
            $controller->verificarLibro();
        break;
        
        case 'hash':
            $pass="admin";
           
            echo password_hash($pass, PASSWORD_DEFAULT);
            break;
      
        

    default:
        echo('404 Page not found');
        break;
}
