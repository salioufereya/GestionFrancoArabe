<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\AnneeScolaireNiveau;
use Models\Niveau;
use Models\Classe;

class NiveauController extends Controller
{
    private $model;
    private $classe;
    private $niveau;
    private $annee;
    private $anneeNiveau;
    public function __construct()
    {
        $this->model = new Niveau();
        $this->classe = new Classe();
        $this->niveau = new Niveau();
        $this->annee = new AnneeScolaire();
        $this->anneeNiveau = new AnneeScolaireNiveau();
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
        return $this->model->all($_SESSION['annee']["libelle"]);
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['ajouter'])) {
                $libelle = $_POST['libelle'];
                $annee = $_SESSION['annee']["libelle"];
                $test = $this->model->findNiveauBylibelle($libelle, $annee);
               
                if ($test<=0) {
                    $this->model->insert($libelle); {
                        $id_annee = $this->annee->getIdBylibelle();
                        $annee = $id_annee[0]["id_AnneeScolaire"];
                        $id_niveau = $this->niveau->getIdNiveauBylibelle($libelle);
                        $niveau = $id_niveau[0]["id_Niveau"];
                        $this->anneeNiveau->insert($niveau, $annee);
                        $_SESSION['success'] = "ajout reussi";
                        header('location:/Niveau/liste');
                    }
                } else {
                    $_SESSION['error'] = "Groupe Existe deja ";
                    header('location:/Niveau/liste');
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
        $annee = $_SESSION['annee']["libelle"];
        $recupDonnee = $this->model->all($annee);
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }



   






}
