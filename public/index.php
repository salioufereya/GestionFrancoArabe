<?php

require_once("../Routes/Route.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);


$route=new Route();
$route->loadController();





