<?php


namespace Core;

/**
 * Class Config
 * @package Core
 */
class Config {


    private $settings = [];

    private static $_instance;

    /**
     * Config constructor.
     * @param $file
     */
    public function __construct($file){
       $this->settings = require ($file);

    }

    /**
     * @param $file
     * @return Config
     */
    public static function getInstance($file) {
        if(is_null(self::$_instance)) {
            self::$_instance =  new Config($file);
        }
        return self::$_instance;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key) {
        if(!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }

}