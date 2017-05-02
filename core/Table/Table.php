<?php

namespace Core\Table;

use Core\Database\Database;

/**
 * Class Table
 * @package App\Table
 */
abstract class Table {

    protected $table;
    protected $db;

    public function __construct(Database $database)
    {
        $this->db = $database;
        if(is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower($class_name);
        }

    }

    /**
     * @param $statement
     * @param null $attributes
     * @param bool $one
     * @return
     */
    public function query($statement, $attributes = null, $one = false) {

        if($attributes) {
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table','Entity',get_class($this)),
                $one);
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one);
        }
    }

    /**
     * @param $id
     */
    public function find($id) {
        return $this->query(
            "SELECT * FROM " . $this->table . "
            WHERE id = ?
            ", [$id], true);
    }





}