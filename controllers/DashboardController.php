<?php
namespace controllers;


use Models\AnneeScolaire;
use controllers\Controller;

class DashboardController extends Controller
{
    
    public function view()
    {
      //  require_once("../Views/annee/index.php");
      $this->render('accueil.view');
    }
    
}










