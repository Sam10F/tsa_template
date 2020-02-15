<?php

class HomeController extends BaseController
{
    public function index(){
        require_once('Models/HomeModel.php');

        $model = new HomeModel();

        return [
        ];

    }
}