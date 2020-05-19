<?php
require_once 'libs/Smarty.class.php';

class AdminView{
   
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }
    
    public function showHome(){
        $this->smarty->display('templates/showHome.tpl');
    }

    public function showMessage($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/showMessage.tpl');
    }

}