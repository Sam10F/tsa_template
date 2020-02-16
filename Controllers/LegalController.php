<?php

class LegalController extends BaseController
{
    public function privacidad(){

        $meta_data = ['title' => 'Política de privacidad'];
        $js = [];
        $css = [];

        return ['js' => $js, 'css' => $css, 'meta_data' => $meta_data, 'view' => 'legal/politica_de_privacidad'];
    }

    public function cookies(){

        $meta_data = ['title' => 'Política de cookies'];
        $js = [];
        $css = [];

        return ['js' => $js, 'css' => $css, 'meta_data' => $meta_data, 'view' => 'legal/politica_de_cookies'];
    }
}