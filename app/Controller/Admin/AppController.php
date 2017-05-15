<?php


namespace App\Controller\Admin;

use Core\Auth\DBAuth;
use \App;

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
}