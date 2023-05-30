<?php

use Models\AnneeScolaire;
use controllers\Controller;


class AnneeController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new AnneeScolaire();   
    }
    public function selectAll()
    {
        return $this->model->all();
    }
    public function view()
    {
        if( $this->login()==null){
            header('Location:/');
            return;
        }
      else{
        $annee = $this->selectAll();
        $this->render('annee.view', ['annee' => $annee]);
      }
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['send'])) {
                $libelle = $_POST['libelle'];
                extract($_POST);
                if ($this->model->yearIsVAlid($libelle)) {
                    // Exécution de la requête SQL
                    $test = $this->model->findMarqueByLibelle($libelle);
                    if (!$test) {
                        $this->model->insert($libelle);
                        $_SESSION['success'] = "Ajout reussi";
                        header('location:http://localhost:8000/Annee/view');
                    } else {
                        $_SESSION['error'] = "annee existe deja!";
                        header('location:http://localhost:8000/Annee/view');
                    }
                } else {
                    $_SESSION['error'] = "annee not valide!";
                    header('location:http://localhost:8000/Annee/view');
                }
            }
        }
    }
    public function lire($id)
    {
        echo $id;
    }
    public function edit($item_id)
    {
        if (isset($_POST['edit'])) {
            $libelle = $_POST['libelle'];
            if ($this->model->yearIsVAlid($libelle)) {
                  if($this->model->findMarqueByLibelle($libelle)){
                   $_SESSION['error'] = "l'annee existe deja!";
                  }
                  else
                  {
                    $this->model->update($libelle, $item_id);
                  }

            }else
            {
            $_SESSION['error'] = "annee not valid!";
            }
            header('location:http://localhost:8000/Annee/view');
        } else {
            $item = $this->model->find($item_id);
            $this->render('edit_annee.view',  ['item' => $item]);
        }
    }
    public function delete($item_id)
    {
        if (isset($_POST['delete'])) {
            $this->model->delete($item_id);
            header('location:http://localhost:8000/Annee/view');
            $_SESSION['success'] = "Supprimer avec success";
        } else {
            $item = $this->model->find($item_id);
            $this->render('delete_annee.view', ['item' => $item]);
        }
    }

    public function activer($item_id)
    {
        if (isset($_POST['activer'])) {
         $this->model->activer($item_id);
         $this->model->desctiver($item_id);
         $annee = $this->model->EnCours();
         $_SESSION['annee'] = $annee ;
         header('location:http://localhost:8000/Annee/view');
         $_SESSION['success'] = "Année activée";
    }else
    {
        $item = $this->model->find($item_id);
        $this->render('activer_annee.view',  ['item' => $item]);
    }

    }

}