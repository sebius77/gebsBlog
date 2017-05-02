<?php


namespace App\Entity;

use Core\Entity\Entity;

class EpisodeEntity extends Entity {

    /**
     *
     * @return string
     */
    public function getUrl() {
        return 'index.php?page=episode&id=' . $this->id;
    }

    /**
     * permet de récupérer un extrait de l'épisode
     * @return string
     */
    public function getExtrait() {
        $html = '<p>' . substr($this->contenu,0,200) . '</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Lire la suite ...</a>';

        return $html;
    }



}