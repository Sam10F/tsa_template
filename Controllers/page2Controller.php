<?php
require_once('BaseController.php'); 
class Page2Controller
{	
	public function index(){

		$extracss = [
			'dist/css/page2.css'
		];

		$extrascripts = [
			'dist/js/page2.js',
			'dist/js/jquery.js'
		];

		BaseController::construct($extracss, $extrascripts);
		BaseController::renderPage();
	}
}
?>