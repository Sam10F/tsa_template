<?php
require_once "Config/routes.php";

$route = new Routes(getController($_SERVER['REQUEST_URI']));

$route->render();