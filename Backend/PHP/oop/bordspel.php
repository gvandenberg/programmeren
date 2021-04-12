<?php

class Money {
    public $value;
    public $color;


    function set_value($value) {
        $this->value = $value;
    }

    function get_value() {
        return $this->value;
    }
}

class pieces {
    public $name;
    public $shape;
    public $color;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

function start(){}
?>