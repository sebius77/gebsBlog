<?php

use Core\Database\MysqlDatabase;
use Core\Config;

class App {

    private $db_instance;
    private static $_instance;

    /**
     * Initialise l'instance de l'objet App
     * @return App
     */
    public static function getInstance() {
        if(self::$_instance === null) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     * Permet d'instancier la classe avec le nom donné
     * en injectant la connexion à la base de données
     * @param $name
     * @return mixed
     */
    public function getTable($name) {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    /**
     * Initialise la connexion à la base de données.
     * @return MysqlDatabase
     */
    public function getDb() {
        $config = Config::getInstance(ROOT . '/config/config.php');

        if ($this->db_instance === null) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_host'),
                $config->get('db_user'), $config->get('db_pass'));
        }
        return $this->db_instance;
    }

    /**
     * Charge les classes Autoloader
     * pour l'automatisation du chargement des classes
     * dans app/ et core/
     */
    public static function load() {
        session_start();
        require 'Autoloader.php';
        App\Autoloader::register();
        require __DIR__.'/../core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function forbidden() {
        header('HTTP/1.0 403 Forbidden');
        die('Accès Interdit');
    }

    public function notFound() {
        header('HTTP/1.0 404 Not Found');
        die('PAge introuvable');
    }
}