<?php
// Stap 1: De playlist Array aanmaken
$playlist = array (
    array("genre" => "HipHop", "auteur" => "John Williams",
        "titel" => "My Girl"),
    array("genre" => "Jazz", "auteur" => "John Coltrane",
        "titel" => "New York"),
    array("genre" => "HipHop", "auteur" => "Shakira",
        "titel" => "Obsession")
);
// Stap 2: De array recursief doorlopen en tonen
array_walk_recursive($playlist, "printRecursief");

function printRecursief($item, $key)
{
    echo "<br>$key" . ": " . "<i> $item </i>";
}
// Stap 3: Voeg de playlist aan de array toe
$nieuweplaylist = array (
    array("genre" => "Latin", "auteur" => "Caetono Veloso", "titel" => "Cafe Atlantico")
);
$playlist = array_merge($playlist, $nieuweplaylist);

// Stap 4: Methode die de tracks weergeeft zoals beschreven
echo "<br>";

function printTracks($playlist, $key)
{
    $track = implode("|", $playlist);

    echo "<br>Track $key" . ": " . "$track";
}
array_walk($playlist, "printTracks");