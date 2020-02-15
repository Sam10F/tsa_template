<?php
include_once 'Config/global.php';
require_once "functions.php";


class BaseController{

}

function loadAction($controllerObj, $action){
    $accion=$action;
    return $controllerObj->$accion();
}

function loadController($controller){
    $controller = ucwords($controller).'Controller';

    if(is_file("Controllers/" . $controller . ".php")){
        require_once $controller . ".php";
        $controllerObj = new $controller();
    }else{
        require_once "Controllers/P404Controller.php";
        $controllerObj = new P404Controller();
    }

    return $controllerObj;
}


function startAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        return loadAction($controllerObj, $_GET["action"]);
    }else{
        return loadAction($controllerObj, ACCION_DEFECTO);
    }
}

?>