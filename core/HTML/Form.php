<?php

namespace Core\HTML;


/**
 * Class Form
 * @package Core\HTML
 *
 * Class to generate a form
 *
 */

class Form {

    /**
     *
     * @var array Données utilisées par le formulaire
     *
     */
    protected $data;

    /**
     *
     * @var string Tag utilisé pour entourer les champs
     *
     */
    protected $surround ='p';



    public function __construct($data = array()) {
        $this->data = $data;
    }


    protected function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }


    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }




    public function input($name, $label, $options = []) {
        $type = isset($options['type']) ? $options[$type] : 'text';

        return $this->surround(
            '<label>' . $name . '</label><input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) .'"');


    }


    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');

    }


}