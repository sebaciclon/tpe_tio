<?php

require_once 'models/db.conection.model.php';

class AdminModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }


}