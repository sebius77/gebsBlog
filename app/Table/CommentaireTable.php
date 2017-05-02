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
        return $this->query('SELECT * FROM commentaire WHERE idEpisode = ?', [$id]);
    }

    public function add($fields) {
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }

        $sql_parts = implode(",", $sql_parts);

        return $this->query("INSERT INTO commentaire SET $sql_parts, date=now()",$attributes,true);
    }

}