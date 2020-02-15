<?php

class P404Controller extends BaseController
{
    public function index(){
        return ['ERROR' => '404'];
    }
}