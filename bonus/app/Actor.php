<?php

class Actor {

    public $name;
    public $last_name;

    function __construct($name, $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
    }
}