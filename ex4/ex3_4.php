<?php
$personne = array(
    "prenom" => "Adem",
    "nom" => "RB",
    "age" => 21,
    "ville" => "Djerba"
);

echo "Prénom : " . $personne["prenom"] . "<br>";
echo "Nom : " . $personne["nom"] . "<br>";

foreach ($personne as $cle => $valeur) {
    echo "La clé [$cle] a pour valeur [$valeur].<br>";
}
