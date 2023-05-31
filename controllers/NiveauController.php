<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\Niveau;
use Models\Classe;

class NiveauController extends Controller
{
    private $model;
    private $classe;
    private $niveau;
    public function __construct()
    {
        $this->model = new Niveau();
        $this->classe = new Classe();
        $this->niveau = new Niveau();
    }




    public function index()
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
            $Niveau = $this->selectAll();
            $this->render('groupe_niveau.view', ['Niveaux' => $Niveau]);
        }
    }

    public function selectAll()
    {
        return $this->model->all();
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['ajouter'])) {
                $libelle = $_POST['libelle'];
                $test = $this->model->findNiveauByLibelle($libelle);
                if (!$test) {
                    $this->model->insert($libelle); {
                        $_SESSION['success'] = "ajout reussi";
                        header('location:/Niveau/list');
                    }
                } else {
                    $_SESSION['error'] = "Groupe Existe deja ";
                    header('location:/Niveau/list');
                }
            }
        }
    }
   
    public function liste()
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
            $Niveau = $this->selectAll();
            $this->render('groupe_niveau.view', ['Niveaux' => $Niveau]);
        }
    }


    public function getNiveau()
    {
        $ids = explode('/', $_SERVER['REQUEST_URI']);
        $id = $ids[3];
        return $this->niveau->findNiveauById($id);
    }
    public function getClass($id_class)
    {

        return $this->classe->getClassById($id_class);
    }

    public function classe($class)
    {


        $groupe = $this->getNiveau();
        $classes = $this->getClass($class);
        $this->render('classe.view', ['classes' => $classes, 'groupe' => $groupe]);
    }



    public function all()
    {
        $recupDonnee = $this->model->getAllNiveau();
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }
}
