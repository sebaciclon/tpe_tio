<?php

require_once 'controllers/admin.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'loguearse';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch($parametros[0]){

    case 'loguearse': {
        $controller = new AdminController();  
        $controller->loginAdmin();
    break;
    }
    case 'home': {
        $controller = new PublicController();     
        $controller->home();
    break;
    }
    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    }    
}
    