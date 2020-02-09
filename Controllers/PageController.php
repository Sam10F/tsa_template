<?php

class PageController extends BaseController
{
    public function index(){
        require_once('Models/PageModel.php');
        $model = new PageModel();

        $name = $model->getName();
        $surname = $model->getSurName();
    }
}