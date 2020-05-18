<?php

require_once 'models/db.conection.model.php';

class AdminModel{

    private $modelConection;

    public function __construct(){
        $this->modelConection = new dbConectionModel();
    }

   //devuelve todos los administradores de la tabla administradores
   public function getAllAdmin() {
    //Me conecto con la DDBB
    $db = $this->modelConection->createConexion();
    //Hacemos la consulta
    $sql = "SELECT * FROM administradores";
    $query = $db->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
    $query->execute();        //la ejecuto
    $administradores = $query->fetchAll(PDO::FETCH_OBJ);    
    return $administradores;
}

    //ingreso el nuevo administrador a la DDBB
    function saveUser($nombre, $usuario, $contraseña) {
        // 1) abro la conexion con mysql
        $db = $this->modelConection->createConexion();
        // 2)enviamos la consulta
        $sql = "INSERT INTO administradores(nombre, usuario, contrasenia) VALUES (?, ?, ?)";
        $query = $db->prepare($sql);  
        $query->execute([$nombre, $usuario, $contraseña]);        
    }


}