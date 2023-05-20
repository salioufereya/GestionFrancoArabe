<?php

require_once("../Models/AnneeScolaire.php");

 require_once("Controller.php");
class AccueilController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new AnneeScolaire();
    }
    public function selectAll()
    {
        $recupDonnee = $this->model-> all();
        echo json_encode($recupDonnee);
    }
    public function insert(array $data)
    {
        $this->model->insert($data);
    }
    public function index()
    {
       require_once('../Views/acccueil.view.php');
    }

    public function view()
    {
      //  require_once("../Views/annee/index.php");
      $this->render('acccueil.view');
    }
    
}










