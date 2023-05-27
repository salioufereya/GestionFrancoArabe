
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


  public function createView()
  {
  
    
    $this->render('add_eleve_view');
  }
  public function add()
  {

    $this->render('add_eleve_view');
  }
}
