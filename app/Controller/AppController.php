<?php

namespace App\Controller;

use Core\Controller\Controller;

/**
 * Class AppController
 * @package App\Controller
 * Classe Parent des controllers de la partie Front
 */
class AppController extends Controller {

   protected $viewPath;
   protected $template = 'layout';

   public function __construct()
   {
       $this->viewPath = ROOT . '/app/Views/';
   }

}