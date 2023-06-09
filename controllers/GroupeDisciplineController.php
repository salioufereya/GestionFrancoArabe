<?php



use controllers\Controller;
use Models\GroupeDiscipline;

class GroupeDisciplineController  extends Controller
{

    private $model;



    public function __construct()
    {

        $this->model = new GroupeDiscipline;
    }


    public function insert()
    {
        $data = file_get_contents("php://input");
        $user = json_decode($data, true);
        $Gd = $user['gdDiscipline'];
        if ($this->model->insert($Gd)) {
            echo "success";
        } else {
            echo "error";
        }
    }


    public function getLast($lab)
    {
        $recupDonnee = $this->model->last($lab);
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }


    public function all()
    {
        $recupDonnee = $this->model->all();
        $resulat = json_encode($recupDonnee);
        echo $resulat;
    }
}
