<?php


namespace App\Table;

use Core\Table\Table;

/**
 * Class Episode
 * @package App\Table
 */
class Episode extends Table {

    protected static $table = 'episode';

    /**
     * Récupère la liste des épisodes dans l'ordre ascendant
     * @return array|mixed
     */
    public static function getLast() {
        return self::query('SELECT * FROM episode ORDER BY date DESC');
    }



    public static function getThreeLast() {
        return self::query('SELECT * FROM episode ORDER BY date DESC LIMIT 3');
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


}

