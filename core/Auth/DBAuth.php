<?php

namespace Core\Auth;


use Core\Database\Database;

/**
 * Class DBAuth
 * @package Core\Auth
 */
class DBAuth {

    private $db;

    /**
     * DBAuth constructor.
     * @param Database $db
     */
    public function __construct(Database $db){

        $this->db = $db;

    }

    /**
     * @return bool
     */
    public function getUserId() {
        if($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password) {
        $user = $this->db->prepare('SELECT * FROM user WHERE username = ?', [$username], null, true);
        if($user){
            if($user->password === sha1($password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }


        }
        return false;
    }

    /**
     * @return bool
     */
    public function logged() {
        return isset($_SESSION['auth']);
    }

}