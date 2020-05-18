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
            echo "Estoy en la función checkIn";
        }


}