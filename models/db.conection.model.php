<?php
    
    class dbConectionModel {

        //Crea la conexión a la DDBB
        public function createConexion() {
            $host = 'localhost';
            $userName = "root";
            $password = '';
            $dataBase = 'tpe_tio';
            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dataBase;charset=utf8", $userName, $password);
            } catch (Exception  $e){
                var_dump($e);
            }
            return $pdo;
        }
    }