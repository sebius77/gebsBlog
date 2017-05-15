<?php


namespace App\Controller;

use Core\Controller\Controller;


class AppController extends Controller {


   protected $viewPath;
   protected $template = 'layout';

   public function __construct()
   {
       $this->viewPath = ROOT . '/app/Views/';

   }

}