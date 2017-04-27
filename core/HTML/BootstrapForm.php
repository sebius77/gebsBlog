<?php


namespace Core\HTML;




class BootstrapForm extends Form {

    protected function surround($html) {

        return "<div class=\"form-group\">{$html}</div>";

    }


    public function input($name, $label, $options = []) {
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<label>' . $name . '</label><input class="form-control" type="' . $type . '" name="' .
            $name . '" value="' . $this->getValue($name) .'"');


    }

    public function submit() {
        return $this->surround(
            '<button type="submit" class="btn btn-primary form-control">Envoyer</button>');
    }


}