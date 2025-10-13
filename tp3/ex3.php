<?php
// 1. Tableau multidimensionnel associatif avec tableaux indicés
$personnes_indexed = [
    "Rb3" => ["Adem", "Djerba", 21],
    "Smith" => ["John", "Paris", 30],
    "Doe" => ["Jane", "Londres", 25]
];

// 2. Tableau multidimensionnel associatif avec tableaux associatifs
$personnes_assoc = [
    "Rb3" => ["Prenom" => "Adem", "Ville" => "Djerba", "Age" => 21],
    "Smith" => ["Prenom" => "John", "Ville" => "Paris", "Age" => 30],
    "Doe" => ["Prenom" => "Jane", "Ville" => "Londres", "Age" => 25]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Tableaux multidimensionnels</title>
</head>

<body>
    <h2>Lecture avec foreach (tableaux indicés)</h2>
    <?php
    foreach ($personnes_indexed as $nom => $infos) {
        echo "Nom : $nom, Prénom : {$infos[0]}, Ville : {$infos[1]}, Age : {$infos[2]}<br>";
    }
    ?>

    <h2>Lecture avec foreach (tableaux associatifs)</h2>
    <?php
    foreach ($personnes_assoc as $nom => $infos) {
        echo "Nom : $nom, Prénom : {$infos['Prenom']}, Ville : {$infos['Ville']}, Age : {$infos['Age']}<br>";
    }
    ?>

    <h2>Lecture avec while (tableaux indicés)</h2>
    <?php
    $keys_indexed = array_keys($personnes_indexed);
    $i = 0;
    while ($i < count($personnes_indexed)) {
        $nom = $keys_indexed[$i];
        $infos = $personnes_indexed[$nom];
        echo "Nom : $nom, Prénom : {$infos[0]}, Ville : {$infos[1]}, Age : {$infos[2]}<br>";
        $i++;
    }
    ?>

    <h2>Lecture avec while (tableaux associatifs)</h2>
    <?php
    $keys_assoc = array_keys($personnes_assoc);
    $j = 0;
    while ($j < count($personnes_assoc)) {
        $nom = $keys_assoc[$j];
        $infos = $personnes_assoc[$nom];
        echo "Nom : $nom, Prénom : {$infos['Prenom']}, Ville : {$infos['Ville']}, Age : {$infos['Age']}<br>";
        $j++;
    }
    ?>
</body>

</html>