<?php


namespace App\Table;

use Core\Table\Table;

/**
 * Class Episode
 * @package App\Table
 */
class EpisodeTable extends Table {

    protected $table;

    /**
     * Récupère la liste des épisodes dans l'ordre ascendant
     * @return array|mixed
     */
    public function getLast() {
        return $this->query('SELECT * FROM episode ORDER BY date DESC');
    }


    /**
     * Permet de récupérer les 3 derniers épisodes dans un ordre décroissant
     * @return mixed
     */
    public function getThreeLast() {
        return $this->query('SELECT * FROM episode ORDER BY date DESC LIMIT 3');
    }



}

