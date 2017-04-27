<?php


namespace App\Table;

use App;

/**
 * Class Table
 * @package App\Table
 */
abstract class Table {

    protected static $table;

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    /**
     * récupère le nom de la table
     * @return mixed
     */
    protected static function getTable() {
        if(static::$table === null) {
            $class_name = explode('\\', get_called_class());
            $class_name = end($class_name);

            static::$table = strtolower($class_name);

        }

        return static::$table;
    }

    /**
     * récupère les éléments de la table
     * @return array|mixed
     */
    public static function all() {
        return App::getDb()->query("SELECT * FROM " . static::getTable() . "", get_called_class());

    }

    /**
     * @param $id
     */
    public function find($id) {

    }

    /**
     * @param $statement
     * @param null $attributes
     * @param bool $one
     */
    public function query($statement, $attributes = null, $one = false) {

    }


}