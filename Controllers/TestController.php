<?php

class TestController extends BaseController
{
    public function index(){
        require_once('Models/TestModel.php');

        $model = new TestModel();

        return [
            'name' => $model->getName(),
            'apellido' => $model->getSurName()
        ];

    }
}