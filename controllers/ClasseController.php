<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\Classe;
use Models\Niveau;
use Models\Inscription;
use Models\Eleve;
class ClasseController extends Controller
{
    private $model;
    private $niveau;
    private $inscription;
    private $annee;
    private $classe;
    private $eleve;
    public function __construct()
    {
        $this->model = new Classe();
        $this->niveau = new Niveau();
        $this->inscription = new Inscription();
        $this->annee = new AnneeScolaire(); //
        $this->classe = new Classe();
        $this->eleve = new Eleve();
    }
    public function selectAll()
    {
        $recupDonnee = $this->model->all();
        echo json_encode($recupDonnee);
    }
    public function create($id)
    {
        $ids = explode('/', $_SERVER['REQUEST_URI']);
        $id = (int)$ids[3];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['ajouter'])) {
                $libelle = $_POST['libelle'];
                $test = $this->model->findClassByLibelle($libelle);
                if (!$test) {
                    $this->model->insert($libelle, $id);
                    $_SESSION['success'] = "ajouter avec success";
                    header('location:/Class/view/' . $id);
                } else {
                    $_SESSION['error'] = "classe existe deja";
                    header('location:/Class/view/' . $id);
                }
            }
        }
    }

    // public function getNiveau()
    // {
    //     $ids = explode('/', $_SERVER['REQUEST_URI']);
    //     $id = $ids[3];
    //     return $this->niveau->findNiveauById($id);
    // }

    // public function getClass($id_class)
    // {

    //     return $this->model->getClassById($id_class);
    // }

    // public function view($class)
    // {

    //     if ($this->login() == null) {
    //         header('Location:/');
    //         return;
    //     } else {
    //         $groupe = $this->getNiveau();
    //         $classes = $this->getClass($class);
    //         $this->render('classe.view', ['classes' => $classes,'groupe' => $groupe]);
    //     }
    // }


    public function class($id)
    {
  
  
      return $this->classe->findClasseByIdClass($id);
    }
    public function liste()
    {
        $ids = explode('/', $_SERVER['REQUEST_URI']);
        $id = $ids[3];
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
            $eleves = $this->eleve->findEleveByIdClass($id);
            $classe = $this->class($id);
            $this->render('eleves.view', ['eleves' => $eleves, 'classe' => $classe]);
        }
    }
}
