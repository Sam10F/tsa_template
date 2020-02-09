<?php
include_once 'Config/global.php';

class BaseController{

}

function loadAction($controllerObj, $action){
    $accion=$action;
    $controllerObj->$accion();
}

function startAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"]);
    }else{
        loadAction($controllerObj, ACCION_DEFECTO);
    }
}


function loadController($controller){
    $controlador=ucwords($controller).'Controller';
    $strFileController='Controllers/'.$controlador.'.php';

    if(!is_file($strFileController)){
        $strFileController='Controllers/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
    }

    require_once $strFileController;
    $controllerObj=new $controlador();
    return $controllerObj;
}

?>