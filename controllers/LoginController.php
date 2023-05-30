<?php

use controllers\Controller;
use Models\User;
use Models\AnneeScolaire;

class LoginController extends Controller
{


    private $model;
    private $annee;
    public function __construct()
    {
        $this->model = new User();
        $this->annee = new AnneeScolaire();
    }
    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $user = $this->model->findUser($username);
            $_SESSION['user'] = $user['username'];
            $_SESSION['annee'] = $this->annee->EnCours();
            if ($user != null && ($_POST['password'] == $user['password'])) {
                header('location:/GroupeNiveau/view');
                $_SESSION['user_id']=$user['id_user'];
              
            } else {
                header('location:/');
                $_SESSION['error'] = 'mot de passe incorrect';
            }
        }
    }
    public function register()
    {
    }

    public function logout()
    {
        session_destroy();
        header('location:/');
    }
}
