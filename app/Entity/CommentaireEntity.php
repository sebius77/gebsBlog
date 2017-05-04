<?php

namespace App\Entity;

use Core\Entity\Entity;

class CommentaireEntity extends Entity {

    protected $children = [];

    public function getChildren() {
        return $this->children;
    }


    public function setChildren($children) {
        $this->children[] = $children;
    }


}