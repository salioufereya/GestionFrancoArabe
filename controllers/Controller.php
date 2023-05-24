<?php


namespace controllers;

abstract class Controller
{

   public function loadModel(string $model)
   {
    require_once("../Models/".$model.'php');
   }
 
   public function render(string $fichier,array $data=[])
   {
    extract($data);
      ob_start();
    require_once('../Views/'.$fichier.'.php');

    $content=ob_get_clean();
    require_once("../Views/template.php");
   }



}