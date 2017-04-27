<?php

namespace Core\Database;

use \PDO;


class MysqlDatabase extends Database {

   private $pdo;



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