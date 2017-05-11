<?php

namespace App\Controller\Admin;


use App;
use App\Controller\AppController;
use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;




class UsersController extends AppController {

    public function login() {

        $errors = false;

        if(!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());

            if($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: admin.php');
            } else {
                $errors = true;
            }
        }


        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form','errors'));


    }


}