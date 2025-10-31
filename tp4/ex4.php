<?php
function majusculePremiereLettre(&$tableau)
{
    foreach ($tableau as &$mot) {
        $mot = ucfirst(strtolower($mot));
    }
}

$noms = ["aDeM", "fAtma", "aHmED"];
majusculePremiereLettre($noms);

print_r($noms);
