<?php

class HomeController extends BaseController
{
    public function index(){
        require_once('Models/HomeModel.php');
        $model = new HomeModel();

        $meta_data = ['title' => 'Home'];
        $js = ['home.js'];
        $css = ['home.css'];

        return ['js' => $js, 'css' => $css, 'meta_data' => $meta_data, 'view' => 'home'];

    }
}