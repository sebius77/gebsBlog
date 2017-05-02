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
        return $this->db->query(
            "SELECT * FROM " . $this->table . "
            WHERE id = ?
            ", [$id], true);
    }



    /**
     * @param $id
     * @param $fields
     * @return array|mixed
     */
    public function update($id, $fields) {
        $sql_parts = [];
        $attributes = [];
        die(var_dump($fields));
        foreach ($fields as $k => $v) {
            $sql_parts = "$k = ?";
            $attributes = $v;
        }
        $attributes[] = $id;

        $sql_parts = implode(',', $sql_parts);
        die();
        return $this->query("UPDATE {$this->table} SET name = $sql_parts WHERE id = ?",$attributes, true);
    }


}