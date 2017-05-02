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


    /**
     * Permet de récupérer tous les commentaires d'un épisode
     * @param $id
     * @return mixed
     */
    public function getLastById($id) {
        return $this->query('SELECT * FROM commentaire WHERE idEpisode = ?',[$id]);
    }

    

}