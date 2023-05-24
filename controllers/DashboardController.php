<?php
namespace controllers;


use Models\AnneeScolaire;
use controllers\Controller;

class DashboardController extends Controller
{
    // private $model;
    // public function __construct()
    // {
    //     $this->model = new AnneeScolaire();
    // }
    // public function selectAll()
    // {
    //     $recupDonnee = $this->model-> all();
    //     echo json_encode($recupDonnee);
    // }
    // public function insert(array $data)
    // {
    //     $this->model->insert($data);
    // }
    // public function index()
    // {
    //    require_once('../Views/acccueil.view.php');
    // }

    public function view()
    {
      //  require_once("../Views/annee/index.php");
      $this->render('accueil.view');
    }
    
}










