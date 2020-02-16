<?php
require_once("Controllers/BaseController.php");

class Routes{
    protected $data;

    public function __construct($controller){
        $cont = '';
        if(!isset($this->controller) && $controller === ''){$cont = 'home';}
        elseif(!isset($this->controller) && $controller === 'politica_de_privacidad'){$cont = 'Legal@privacidad';}
        elseif(!isset($this->controller) && $controller === 'politica_de_cookies'){$cont = 'Legal@cookies';}
        else{$cont = $controller;}

        $this->redirect($cont);
    }

    private function redirect($cont){
        $controllerObj=loadController($cont);

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


function loadAction($controllerObj, $action){
    $accion=$action;
    return $controllerObj->$accion();
}

function loadController($controller){
    $cont = explode('@', $controller);

    $controller = ucwords($cont[0]).'Controller';
    $action = ucwords($cont[1]);

    if(is_file("Controllers/" . $controller . ".php")){
        require_once 'Controllers/' . $controller . ".php";
        $controllerObj = new $controller();
    }else{
        require_once "Controllers/P404Controller.php";
        $controllerObj = new P404Controller();
    }

    return ['controllerObj'=> $controllerObj, 'action' => $action, 'controller' => $cont[0]];
}


function startAction($controllerObj){
    if(isset($controllerObj['action']) && method_exists($controllerObj['controllerObj'], $controllerObj['action'])){
        return loadAction($controllerObj['controllerObj'], $controllerObj['action']);
    }else{
        return loadAction($controllerObj['controllerObj'], ACCION_DEFECTO);
    }
}