<?php

class TestController extends BaseController
{
    public function index(){
        require_once('Models/TestModel.php');
        $model = new TestModel();

        $meta_data = ['title' => 'Test page'];
        $js = ['test.js'];
        $css = ['test.css'];

        $data = [
            'name' => $model->getName(),
            'apellido' => $model->getSurName()
        ];

        return ['js' => $js, 'css' => $css, 'data' =>  $data, 'meta_data' => $meta_data, 'view' => 'test' ];

    }
}