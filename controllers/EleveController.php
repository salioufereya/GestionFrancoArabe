
<?php


require_once("Controller.php");
class EleveController extends Controller
{
    public function salut()
    {
          echo "eleve";
    }
    public function view()
    {
      //  require_once("../Views/annee/index.php");
      $this->render('eleves.view');
    }




}








