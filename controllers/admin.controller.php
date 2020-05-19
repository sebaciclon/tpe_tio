<?php

require_once 'models/admin.model.php';
require_once 'views/admin.view.php';

class AdminController{

    //Variables globales del controlador
    private $model;
    private $view;
        
    public function __construct() { //Constructor de la clase
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    public function home(){
        $this->view->showHome();
    }

        public function checkIn(){
            if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['psw'])) {   
                $this->view->showMessage("No ingreso todos los datos requeridos");
                //echo "No ingreso todos los datos requeridos";
                
            } else {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['psw'];
                $usuarios = $this->model->getAllAdmin();
                            
                $longitud = count($usuarios);
                for($i = 0; $i < $longitud; $i ++) {
                    if($usuarios[$i]->usuario == $username) {
                        $this->view->showMessage("El nombre de usuario " .$username. " ya esta utilizado, intente con otro");
                        //echo "El nombre de usuario " .$username. " Ya existia en la base de datos, vuelva a intentarlo";
                        die();
                    } 
                }
                if($i == $longitud) {
                    $this->model->saveUser($name, $username, $password);
                    $this->view->showMessage("Usuario " .$username. " guardado correctamente");
                    echo "Usuario guardado correctamente";
                }
            }
        }

        


}