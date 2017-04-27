<?php



use Core\Database\MysqlDatabase;
use Core\Config;

class App {

    private static $db_instance;
    private static $_instance;


    public static function getInstance() {
        if(self::$_instance === null) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }


    public static function getDb() {
        $config = Config::getInstance(ROOT . '/config/config.php');

        if (self::$db_instance === null) {
            self::$db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_host'), $config->get('db_user'), $config->get('db_pass'));
        }
        return self::$db_instance;
    }


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