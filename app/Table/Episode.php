<?php


namespace App\Table;


class Episode extends Table {

    protected  $id;
    protected $titre;
    protected  $contenu;
    protected $date;


    public static function getLast() {
        return \App::getDb()->query('SELECT * FROM episode ORDER BY date DESC', __CLASS__);
    }


    public function getUrl() {
        return('index.php?page=episode&id=' . $this->id);
    }

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

