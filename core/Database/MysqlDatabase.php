<?php

namespace Core\Database;

use \PDO;


/**
 * Class MysqlDatabase
 * @package Core\Database
 */
class MysqlDatabase extends Database {

   private $pdo;


    /**
     * @return PDO
     */
    private function getPDO() {
        if($this->pdo === null) {

                $pdo = new PDO("mysql:dbname={$this->db_name};host={$this->db_host}", "{$this->db_user}",
                    "{$this->db_pass}", array (
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                ));
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->pdo = $pdo;
        }
        return $this->pdo;
    }


    /**
     * @param $statement
     * @param null $class
     * @param bool $one
     * @return array|mixed
     */
    public function query($statement, $class = null, $one = false) {
        $req = $this->getPDO()->query($statement);
        if($class === null) {
            $req->setFetchMode((PDO::FETCH_OBJ));
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        if($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    /**
     * @param $statement
     * @param $attributes
     * @param null $class
     * @param bool $one
     * @return array|mixed
     */
    public function prepare($statement, $attributes, $class = null, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);

        if($class === null) {
            $req->setFetchMode((PDO::FETCH_OBJ));
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class );
        }
        if($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }



}