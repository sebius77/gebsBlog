<?php


namespace App\Table;

/**
 * Class Episode
 * @package App\Table
 */
class Episode extends Table {

    protected  $id;
    protected $titre;
    protected  $contenu;
    protected $date;

    /**
     * Récupère la liste des épisodes dans l'ordre ascendant
     * @return array|mixed
     */
    public static function getLast() {
        return \App::getDb()->query('SELECT * FROM episode ORDER BY date DESC', __CLASS__);
    }

    /**
     * permet de récupérer l'url en fonction de l'id de l'épisode
     * @return string
     */
    public function getUrl() {
        return('index.php?page=episode&id=' . $this->id);
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


    public function getId() {
        return $this->id;
    }


    public function getTitre() {
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
}

    public function getDate() {
        return $this->date;
    }

}

