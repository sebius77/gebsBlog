<?php

namespace App\Entity;

use Core\Entity\Entity;

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