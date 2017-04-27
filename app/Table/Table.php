<?php


namespace App\Table;

use App;


abstract class Table {


    protected static $table;


    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }


    protected static function getTable() {
        if(static::$table === null) {
            $class_name = explode('\\', get_called_class());
            $class_name = end($class_name);

            static::$table = strtolower($class_name);

        }

        return static::$table;
    }


    public static function all() {
        return App::getDb()->query("SELECT * FROM " . static::getTable() . "", get_called_class());

    }


    public function find($id) {

    }

    public function query($statement, $attributes = null, $one = false) {

    }


}