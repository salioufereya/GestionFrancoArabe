<?php
session_start();
use Routes\Route;

require_once("../vendor/autoload.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);


$route=new Route();
$route->loadController();




