<?php
$ABSOLUTE_PATH = '/Users/samuel10/Sites/samuel10f/';

echo "estas en routes <br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "GET: " 	. $_GET["ref"] 	. "<br>";

if($_GET["ref"] == 'page2.php'){call('page2', 'index');}

exit();
function call($controller, $action){
	GLOBAL $ABSOLUTE_PATH;
	require_once($ABSOLUTE_PATH . 'Controllers/' . $controller . 'Controller.php');
	switch($controller){
		case 'user':
			$controller= new UserController();
			break;
		case 'page2':
			$controller= new Page2Controller();
			break; 
	}
	$controller->{$action}();
}