<?php

require_once 'controllers/admin.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch($parametros[0]){

    case 'home': {
        $controller = new AdminController();  
        $controller->home();
    break;
    }

    case 'registrarse': {
        $controller = new AdminController();  
        $controller->checkIn();
    break;
    }
    
    default: {
        $controller = new AdminController();     
        $controller->showMessage("Se ha ejecutado una acción desconocida","images/errores/accion_desconocida.jpg");
    }    
}
    