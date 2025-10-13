<?php
$alphabet = range('A', 'Z');

$dictionary = [
    'A' => ['Arbre', 'Avion', 'Ananas'],
    'B' => ['Banane', 'Bateau', 'Bougie'],
    'C' => ['Chat', 'Chien', 'Citron'],
    'D' => ['Dauphin', 'Dinde', 'Dragon'],
    'E' => ['Éléphant', 'Escargot', 'Étoile'],
    'F' => ['Fleur', 'Fusée', 'Fraise'],
    'G' => ['Girafe', 'Guitare', 'Glace'],
    'H' => ['Hibou', 'Hôtel', 'Hamster'],
    'I' => ['Île', 'Igloo', 'Insecte'],
    'J' => ['Jaguar', 'Jupe', 'Jardin'],
    'K' => ['Kangourou', 'Koala', 'Kayak'],
    'L' => ['Lune', 'Lion', 'Lampe'],
    'M' => ['Maison', 'Montagne', 'Mouton'],
    'N' => ['Navire', 'Nuage', 'Noix'],
    'O' => ['Oiseau', 'Orage', 'Orange'],
    'P' => ['Pomme', 'Papillon', 'Piano'],
    'Q' => ['Quiche', 'Quenouille', 'Question'],
    'R' => ['Rivière', 'Renard', 'Rose'],
    'S' => ['Soleil', 'Serpent', 'Savon'],
    'T' => ['Tigre', 'Tortue', 'Train'],
    'U' => ['Ustensile', 'Uniforme', 'Urne'],
    'V' => ['Voiture', 'Vache', 'Violette'],
    'W' => ['Wagon', 'Wombat', 'Web'],
    'X' => ['Xylophone', 'Xérus', 'Xérès'],
    'Y' => ['Yo-yo', 'Yak', 'Yoga'],
    'Z' => ['Zèbre', 'Zoo', 'Zen']
];

echo "<div id='top'>";
foreach ($alphabet as $letter) {
    echo "<a href='#$letter'>$letter</a> | ";
}
echo "</div><hr>";

foreach ($alphabet as $letter) {
    echo "<h2 id='$letter'>$letter</h2>";

    if (isset($dictionary[$letter])) {
        echo "<ul>";
        foreach ($dictionary[$letter] as $word) {
            echo "<li>$word</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun mot disponible.</p>";
    }

    echo "<a href='#top'>haut</a><hr>";
}
