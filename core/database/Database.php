<?php


namespace Core\Database;


class Database {

    protected $db_name;
    protected $db_user;
    protected $db_pass;
    protected $db_host;


    public function __construct($dbName,$dbHost,$dbUser,$dbPass)
    {
        $this->db_name = $dbName;
        $this->db_host = $dbHost;
        $this->db_user = $dbUser;
        $this->db_pass = $dbPass;
    }


}