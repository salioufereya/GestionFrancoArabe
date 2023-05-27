<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\Classe;

class ClassController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Classe();
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
   

    public function view()
    {
     
      $this->render('classe.view');
    }
    




   

}










