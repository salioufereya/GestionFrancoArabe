<?php


use controllers\Controller;
use Models\Eleve;
use Models\Inscription;
use Models\AnneeScolaire;
use Models\Classe;

class EleveController extends Controller
{

  private $model;
  private $inscription;
  private $annee;
  private $classe;
  public function __construct()
  {
    $this->model = new Eleve();
    $this->inscription = new Inscription();
    $this->annee = new AnneeScolaire(); //
    $this->classe = new Classe();
  }



  public function index()
  {


  //  return $this->render("add_eleve.view");
  }

  public function create($id)
  {

    $ids = explode('/', $_SERVER['REQUEST_URI']);
    $id = $ids[3];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['inscrire'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateDeNaissance = $_POST['dateDeNaissance'];
        $lieuNaissance = $_POST['lieuNaissance'];
        $numero = $_POST['numero'];
        $type = $_POST['type'];
        $id_class = (int)$id;

        $photo = null;
        $sexe = $_POST['sexe'];

        $test = $this->model->findEleveByNumero($numero);
        if (!$test) {
          $id_annee = $this->annee->getIdByLibelle();
          $id_eleve = $this->model->getIdByNumero($numero);
          // var_dump($annee);

          $success = $this->model->insert(
            $nom,
            $prenom,
            $dateDeNaissance,
            $lieuNaissance,
            $numero,
            $type,
            $id_class,
            $photo,
            $sexe
          );
          $annee = $id_annee[0]["id_AnneeScolaire"];
          $id_eleve = $this->model->getIdByNumero($numero);
          $eleve = $id_eleve[0]["id_Eleve"];

          if ($success) {

            $this->inscription->insert($annee, $eleve, $id_class);
            header('location:/Classe/liste/' . $id);
            $_SESSION['success'] = "ajout reussi";
          } else {
            header('location:/Class/liste/' . $id);
            $_SESSION['error'] = "une erreur s'est produite";
          }
        } else {
          $_SESSION['error'] = "eleve existe deja";
          header('location:/Class/liste/' . $id);
        }
      }
    }
  }
}
