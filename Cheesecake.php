<?php

class Cheesecake extends Cake{
    
    function __construct() {
        parent::__construct("Cheesecake", 40);
        $this->ingredients = ['cheese', 'eggs', 'sugar','lemon'];
        $this->picture = './cheesecake1.jpeg';
    }

}