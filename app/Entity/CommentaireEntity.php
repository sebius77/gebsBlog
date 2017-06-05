<?php

namespace App\Entity;

use Core\Entity\Entity;


/**
 * Class CommentaireEntity
 * @package App\Entity
 * Cette classe permet de générer sous forme d'objet
 * les commentaires
 */
class CommentaireEntity extends Entity {

    protected $children = [];
    protected $number;



    public function getChildren() {
        return $this->children;
    }


    public function setChildren($children) {
        if(isset($children)) {
            $this->children[] = $children;
        }
    }
}