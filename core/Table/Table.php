<?php


namespace Core\Table;

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
     * récupère les éléments de la table
     * @return array|mixed
     */
    public static function all() {
        return self::query("SELECT * FROM " . static::$table . "");

    }

    /**
     * @param $id
     */
    public static function find($id) {
        return self::query(
            "SELECT * FROM " . static::$table . "
            WHERE id = ?
            ", [$id], true);
    }

    /**
     * @param $statement
     * @param null $attributes
     * @param bool $one
     * @return
     */
    public function query($statement, $attributes = null, $one = false) {
        if($attributes) {
            return App::getDb()->prepare($statement,$attributes,get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, get_called_class(), $one);
        }

    }


}