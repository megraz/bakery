<?php

class ApplePie extends Cake {

    function __construct() {
        parent::__construct("apple pie", 20);
        $this->ingredients = ["apples", "eggs","sugar", "flour"];
        $this->picture = "./applepie1.jpeg";
        
    }
}