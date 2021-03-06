<?php


namespace App\Entity;

use Core\Entity\Entity;

/**
 * Class EpisodeEntity
 * @package App\Entity
 *
 */
class EpisodeEntity extends Entity {

    /**
     *
     * @return string
     */
    public function getUrl() {
        return '?page=episode&id=' . $this->id;
    }

    /**
     * permet de récupérer un extrait de l'épisode
     * @return string
     */
    public function getExtrait() {
        $html = '<p>' . substr($this->contenu,0,250) . '</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Lire la suite ...</a></p>';

        return $html;
    }

}