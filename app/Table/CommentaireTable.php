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

    /**
     * Permet de récupérer tous les enfants d'un commentaire
     * @param $id
     * @return array
     */
    public function findAllChildren($id) {
        // Dans un premier temps nous récupérons tous les commentaires
        // via l'id de l'épisode
        $comments = $this->getLastById($id);
        $comments_by_id = [];
        // Ensuite nous indexons les commentaires via leur id
        foreach($comments as $comment) {
            $comments_by_id[$comment->id] = $comment;
        }

        // Ensuite nous parsons le tableau avec les nouveaux index
        foreach($comments as $index => $comment) {
            // Si le commentaire à un attribut parent_id non égal à null
            // c'est que le commentaire est l'enfant d'un autre commentaire
            if($comment->parent_id != 0) {
                $comments_by_id[$comment->parent_id]->setChildren($comment);
                unset($comments[$index]);
            }
        }
        return $comments;
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