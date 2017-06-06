<?php


namespace App\Controller\Admin;

use Core\Auth\DBAuth;
use \App;

/**
 * Class AppController
 * @package App\Controller\Admin
 *
 * Classe permettant de tester si l'utilisateur
 * à le droit d'accès à la partie administration
 *
 */
class AppController extends \App\Controller\AppController {

    protected $template = 'layoutAdmin';


    public function __construct()
    {
        parent::__construct();

        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());

        if(!$auth->logged()) {
            $app->forbidden();
        }
    }

    public function setTemplate($template) {
        $this->template = $template;
    }


}