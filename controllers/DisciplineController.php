<?php



use controllers\Controller;

class DisciplineController  extends Controller
{



    public function gestion()
    {
        if ($this->login() == null) {
            header('Location:/');
            return;
        } else {
         
            $this->render('gestion_displine.view');
        }
    }
}
