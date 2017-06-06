<?php

namespace Core\Controller;


/**
 * Class Controller
 * @package Core\Controller
 * Classe parent des contrôleurs
 *
 */

class Controller {


    protected $viewPath;
    protected $template;


    /**
     * @param $view
     * @param array $variables
     * Méthode permettant de transmettre des paramètres à la vue
     * et d'afficher la vue
     */
    public function render($view, $variables =[]) {

        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.','/',$view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }


}