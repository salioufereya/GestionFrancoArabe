<?php

use Models\Niveau;
use controllers\Controller;


class NiveauController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Niveau();
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
      
      $this->render('niveau.view');
    }

    public function all()
    {
        $recupDonnee = $this->model-> all();
        echo json_encode($recupDonnee);
    }
    
}










