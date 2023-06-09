<?php



use controllers\Controller;
use Models\Discipline;
use Models\ClasseDiscipline;

class DisciplineController  extends Controller
{

    private $model;

    private $disciplineClasse;
    public function __construct()
    {


        $this->model = new Discipline;
        $this->disciplineClasse = new ClasseDiscipline;
    }

    public function code()
    {

        $recupDonnee = $this->model->getcode();
        $resulat = $recupDonnee;
        var_dump($resulat);
    }

    // public function insert()
    // {
    //     $data = file_get_contents("php://input");
    //     $user = json_decode($data, true);

    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         echo "Invalid JSON";
    //         return;
    //     }
    //     $discipline = $user["discipline"];
    //     $id_Gd = $user["id_GroupeDiscipline"];
    //     $id_classe = $user["id_classeD"];
    //     $test = explode(' ', $discipline);

    //     if (count($test) > 1) {
    //         $code = $test[0] . $test[1];
    //     } else {

    //         $count = $this->model->code(substr($discipline, 0, 3));
    //         if ($count === 0) {
    //             $code =  strtoupper(substr($discipline, 0, 3));
    //         } else {
    //             $code =  strtoupper(substr($discipline, 0, 4));
    //         }
    //         if ($this->model->insert($discipline, $code, $id_Gd)) {
    //             $id_discipline = $this->model->getId_dis($discipline);
    //             $this->disciplineClasse->insert((int)$id_classe, (int) $id_discipline);
    //         } else {
    //             echo "error";
    //         }
    //     }
    // }


    public function insert()
    {
        $data = file_get_contents("php://input");
        $user = json_decode($data, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Invalid JSON";
            return;
        }

        $discipline = $user["discipline"];
        $id_Gd = $user["id_GroupeDiscipline"];
        $id_classe = $user["id_classeD"];

        $words = explode(' ', $discipline);

        if (count($words) > 1) {
            $code = '';
            foreach ($words as $word) {
                $code .= substr($word, 0, 1);
            }
            $code = strtoupper($code);
        } else {
            $count = $this->model->code(substr($discipline, 0, 3));
            if ($count === 0) {
                $code = strtoupper(substr($discipline, 0, 3));
            } else {
                $code = strtoupper(substr($discipline, 0, 4));

                if ($this->model->code($code) > 0) {
                    $code = strtoupper(substr($discipline, 0, 5));
                }
            }
        }

        if ($this->model->insert($discipline, $code, $id_Gd)) {
            $id_discipline = $this->model->getId_dis($discipline);
            $this->disciplineClasse->insert((int) $id_classe, (int) $id_discipline);
        } else {
            echo "error";
        }
    }


    public function gestion()
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {

            $this->render('gestion_displine.view');
        }
    }


    public function DisciplineByClasse($id)
    {

        $recupDonnee = $this->model->getDisciplineByClasse($id);
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }


    public function delete()
    {
        $data = file_get_contents("php://input");
        $user = json_decode($data, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Invalid JSON";
            return;
        }
        $discipline = $user["id_discipline"];
        $id_classe = $user["id_classeD"];
        foreach ($discipline as $key) {
            $this->disciplineClasse->delete((int)$id_classe, (int) $key);
        }
    }

    public function delete1()
    {
        $data = file_get_contents("php://input");
        $user = json_decode($data, true);
        $discipline = $user['data']["id_discipline"];
        $id_classe = $user['data']["id_classeD"];

        $this->disciplineClasse->delete($id_classe, $discipline);
    }
}
