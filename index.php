<?php
require_once("Controllers/BaseController.php");

$controller = ($_GET["controller"]) ? $_GET["controller"] : CONTROLADOR_DEFECTO;
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    startAction($controllerObj);
}else{
    $controllerObj=loadController(CONTROLADOR_DEFECTO);
    startAction($controllerObj);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ese</title>
    <!-- FIX (404) favicon.ico -->
    <link rel="shortcut icon" href="#" />

    <!--  EXTRA CSS  -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/extra//css/normalize.css" />

    <!--  BASIC CSS  -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/_footer.css" />
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/_header.css" />
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/custom.css" />

    <!-- CUSTOM CSS   -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/views/<?= $controller ?>.css" />

</head>
<body>
<? require_once('_header.php'); ?>

<section id="render-section">
    <? require_once("Views/" . $controller . ".php")?>
</section>


<? require_once('_footer.php'); ?>
</body>
</html>
