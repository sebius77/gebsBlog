<?php

namespace App;

/**
 * Class Autoloader
 * @package App
 */
class Autoloader {


        /**
         * Fonction statique Register
         * (Statique pour ne pas à avoir à instancier la classe)
         * La méthode va permettre le chargement des classes de manière automatique.
         *
         **/
    static function register() {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    /**
     * Inclu le fichier correspondant à notre classe
     * @param $class string le nom de la classe à charger
     *
     */
    static function autoload($class) {

       /**
        * Condition qui vérifie si on récupére le namespace avec la classe
        * Dans ce cas, on remplace le namespace\ par du vide
        * Puis on remplace \ par un / pour un fonctionnement sous linux
        *
        **/
        if(strpos($class, __NAMESPACE__) === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\','/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }

}
