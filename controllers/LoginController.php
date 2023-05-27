<?php

use controllers\Controller;
use Models\User;

class LoginController extends Controller
{


    private $model;
    public function __construct()
    {
        $this->model = new User();
    }

    public function login()
    {

        if (isset($_POST['login'])) {   
            $username= $_POST['username'] ;
            $user = $this->model->findUser($username);
            if ($user != null && ($_POST['password']==$user['password'])){
                header('location:/GroupeNiveau/view');
            } else {
              header('location:/');    
                $_SESSION['error']='mot de passe incorrect';              
            }
        }
    }


    public function register()
    {
    }

    public function logout()
    {
       // $this->session->set_flashdata('success', 'You are successfully logged out!');
    }
}
