<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\GroupeNiveau;

class GroupeNiveauController extends Controller
{
    private $model;
    
    public function __construct()
    {
        $this->model = new GroupeNiveau();
    }
    public function selectAll()
    {
         return $this->model-> all();
        
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['valider'])) {
                $libelle = $_POST['libelle'];
               
            }
        }  
        $this->model->insert($libelle);
    }
    public function index()
    {
       require_once('../Views/acccueil.view.php');
    }

    public function view()
    {
        $GroupeNiveau=$this->selectAll();
      //  require_once("../Views/annee/index.php");
      $this->render('groupe_niveau.view', ['groupeNiveaux'=>$GroupeNiveau]);
    }
    
}









