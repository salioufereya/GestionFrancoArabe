<?php

use Models\AnneeScolaire;
use controllers\Controller;
use Models\Classe;
use Models\Niveau;
use Models\Inscription;
use Models\Eleve;
use Models\AnneeScolaireClasse;
use Models\ClasseDiscipline;
use Models\Discipline;

class ClasseController extends Controller
{
    private $model;
    private $niveau;
    private $inscription;
    private $annee;
    private $classe;
    private $eleve;
    private $anneeClasse;
    private $discipline;
    private $classeDiscipline;
    public function __construct()
    {
        $this->model = new Classe();
        $this->niveau = new Niveau();
        $this->inscription = new Inscription();
        $this->annee = new AnneeScolaire(); //
        $this->classe = new Classe();
        $this->eleve = new Eleve();
        $this->anneeClasse = new AnneeScolaireClasse();
        $this->discipline = new Discipline();
        $this->classeDiscipline = new ClasseDiscipline();
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
                $annee = $_SESSION['annee']['libelle'];
                $test = $this->model->findClassByLibelle($libelle, $annee);

                if ($test <= 0) {
                    $this->model->insert($libelle, $id);
                    $id_annee = $this->annee->getIdBylibelle();
                    $annee = $id_annee[0]["id_AnneeScolaire"];
                    $id_classe = $this->classe->getIdClasseBylibelle($libelle);
                    $classe = $id_classe[0]["id_classe"];
                    $this->anneeClasse->insert($classe, $annee);
                    $_SESSION['success'] = "ajouter avec success";
                    header('location:/Classe/liste/' . $id);
                } else {
                    $_SESSION['error'] = "classe existe deja";
                    header('location:/Classe/liste/' . $id);
                }
            }
        }
    }



    public function class($id)
    {

        return $this->classe->findClasseByIdClass($id);
    }


    public function classeByNiveau($id)
    {
        $recupDonnee = $this->classe->getClasseByIdGroupeNiveau($id);
        $resulat = json_encode($recupDonnee);
        echo $resulat;
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
            $id = $this->model->getIdClasseBylibelle($classe);
            $this->render('eleves.view', ['eleves' => $eleves, 'classe' => $classe, 'id' => $id]);
        }
    }
    public function coef($id)
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
            $classe = $this->classeDiscipline->ClasseByIdClass($id);
            $discipline = $this->discipline->getDisciplineByClasse($id);
            $ids = $this->model->getIdClasseBylibelle($classe);
            $this->render('coef.view', ['classe' => $classe, 'discipline' => $discipline, 'ids' => $ids]);
        }
    }




    public function update()
    {
        $data = file_get_contents("php://input");

        $ponderations = json_decode($data, true);

        foreach ($ponderations['data'] as  $value) {
            $this->model->update((int)$value['id_discipline'], $value['ressource'], $value['examen'], $value['classe']);
        }
    }
}
