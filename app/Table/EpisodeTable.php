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


    /**
     * Permet de récupérer un épisode en fonction de son identifiant
     * @param $id
     * @return mixed
     */
    public function find($id) {
        return $this->query(
            "SELECT * FROM episode
            WHERE id = ?
            ", [$id], true);
    }

        /**
         * @param $id
         * @param $fields
         * @return array|mixed
         */
        public function update($id, $fields) {
            $sql_parts = [];
            $attributes = [];

            foreach ($fields as $k => $v) {
                $sql_parts[] = "$k = ?";
                $attributes[] = $v;
            }

            $attributes[] = $id;
            $sql_parts = implode(",", $sql_parts);

            return $this->query("UPDATE  episode SET $sql_parts WHERE id = ?",$attributes, true);
        }



    public function add($fields) {
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }

        $sql_parts = implode(",", $sql_parts);

        return $this->query("INSERT INTO episode SET $sql_parts",$attributes,true);
    }

    public function delete($id) {
        return $this->query("DELETE FROM episode WHERE id = ?", [$id], true);
    }

    public function all() {
        return $this->query("SELECT * FROM episode");
    }

}

