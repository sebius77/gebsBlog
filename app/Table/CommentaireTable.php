<?php


namespace App\Table;

use Core\Table\Table;
use App;

/**
 * Class Commentaire
 * @package App\Table
 */
class CommentaireTable extends Table{

    protected $table;


    public function getLastById($id) {
        return $this->query('SELECT * FROM commentaire WHERE idEpisode = ?',[$id]);
    }


}