<?php 

$con = new mysqli("127.0.0.1", "root", "samuel88", "samuel10f");
$message = $con->query("SELECT nickName FROM testTable")->fetch_object()->nickName;
$con->close();
echo "$message <br/>";
echo "Hello From Sites Folder!";
exit();


	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	} else {
		$controller='user';
		$action='index';
	}	
	//carga la vista layout.php
	require_once('Views/layout.php');
?>