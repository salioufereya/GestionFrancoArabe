
<?php


use controllers\Controller;

class EleveController extends Controller
{
    public function salut()
    {
          echo "eleve";
    }
    public function view()
    {
    
      $this->render('eleves.view');
    }




}








