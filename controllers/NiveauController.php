<?php

use Models\Niveau;
use controllers\Controller;
use Models\GroupeNiveau;

class NiveauController extends Controller
{
    private $model;
    private $modelGroupNiveau;
    public function __construct()
    {
        $this->model = new Niveau();
        $this->modelGroupNiveau = new GroupeNiveau();
    }
    public function selectAll()
    {
        return $this->model->all();
        
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['ajouter'])) {
                $id = $_POST['selectedValue'];
                $niveau=$_POST['niveau'];
                $cont =  $this->model->insert($niveau, $id);
                if ($cont > 0) {
                    $_SESSION['success'] = "ajout reussi";
                    header('location:/Niveau/view');
                } else {
                    $_SESSION['error'] = "echec";
                    header('location:/Niveau/view');
                }
            }
        }
    }


    public function view()
    {
        $GroupeNiveau = $this->modelGroupNiveau->all();
        $niveaux=$this->selectAll();
        $this->render('niveau.view', ['GroupeNiveau' => $GroupeNiveau,'niveaux' => $niveaux]);
    }

    // public function all()
    // {
    //     $recupDonnee = $this->model->all();
    //     echo json_encode($recupDonnee);
    // }


    public function all($id)
    {
        $recupDonnee = $this->model->getNiveauByGroupeNiveau($id);
        $resulat=json_encode($recupDonnee);
        echo $resulat;
       
    }

}
