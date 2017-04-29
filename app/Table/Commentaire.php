<?php


namespace App\Table;

use Core\Table\Table;
use App;

/**
 * Class Commentaire
 * @package App\Table
 */
class Commentaire extends Table{

    protected static $table = 'commentaire';


    public static function getLastById($id) {
        return self::query('SELECT * FROM Commentaire WHERE idEpisode = ?',[$id]);
    }


}