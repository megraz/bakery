<?php
include './Cake.php';
include_once './Cheesecake.php';
include_once './ApplePie.php';

$cakes = [new Cheesecake(), new ApplePie()];

foreach ($cakes as $cake) {
    // echo $cake->name. ' '. $cake->price.'€'. ' '.'<br/>'; on peut l'écrire ensuite plus simplement:
    echo $cake . '<br/>';
    echo '<img src="' . $cake->picture . '"><br/>';
    
      foreach ($cake->ingredients as $ingredient) {
        echo $ingredient;
    }
}