<?php


namespace App\Controller\Admin;

use Core\Controller\Controller;


class AppController extends Controller {

    protected $viewPath;
    protected $template = 'layoutAdmin';


    public function __construct()
    {
        $this->viewPath = ROOT . '/app/Views/';


    }


}