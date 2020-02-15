<?php
require_once("Controllers/BaseController.php");


class Routes{
    public $data;
    public $controller;

    public function __construct($controller, $action=null){
        $this->controller = $controller;

        $this->redirect($action);
    }

    private function redirect($action){
        $controllerObj=loadController($this->controller);

        $this->data =  startAction($controllerObj);
    }

    public function render(){
        if(array_key_exists('ERROR', $this->data)){
            include("Views/404.php");
        }else{
            include('master.php');
        }
    }
}