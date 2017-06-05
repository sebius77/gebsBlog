<?php


namespace Core\Entity;


class Entity {


    /**
     * Méthode magique permettant de créer les getters à la volée
     * des entités commentaire et episode
     * @param $key
     * @return mixed
     */
    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;


    }



}