<?php

$boeken = array (
    array("titel" => "Stoner", "auteur" => "John Williams",
        "genre" => "Fictie", "prijs" => 19.99 ),
    array("titel" => "De cirkel", "auteur" => "Dave Eggers",
        "genre" => "Fictie", "prijs" => 22.50 ),
    array("titel" => "Rayuela", "auteur" => "Cortázar",
        "genre" => "Fictie", "prijs" => 25.50 )
    );
echo $boeken[0]["prijs"];

function prijslijst($boeken) {
    if (isset($boeken[0]["prijs"])){
        echo "Nee";
    };
}

array_walk($boeken, "prijslijst");