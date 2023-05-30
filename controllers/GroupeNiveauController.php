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
        return $this->model->all();
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['ajouter'])) {
                $libelle = $_POST['libelle'];
                $test = $this->model->findGroupeNiveauByLibelle($libelle);
                if (!$test) {
                    $this->model->insert($libelle); {
                        $_SESSION['success'] = "ajout reussi";
                        header('location:/GroupeNiveau/view');
                    }
                } else {
                    $_SESSION['error'] = "Groupe Existe deja ";
                    header('location:/GroupeNiveau/view');
                }
            }
        }
    }
    public function index()
    {
        require_once('../Views/acccueil.view.php');
    }

    public function view()
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
            $GroupeNiveau = $this->selectAll();
            $this->render('groupe_niveau.view', ['groupeNiveaux' => $GroupeNiveau]);
        }
    }



    public function all()
    {
        $recupDonnee = $this->model->getAllNiveau();
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }
}
