<?php

class Cake {

    public $name;
    public $price;
    public $picture;
    public $ingredients;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function ingredients() {
        foreach ($array as $key => $value) {
            
        }
    }

       function __toString() {
            return $this->name . ' ' . $this->price . " ";
        }

    }
    