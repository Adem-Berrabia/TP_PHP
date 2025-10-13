<?php
// 1. Créer un tableau d'entiers de 1 à 63
$entiers = range(1, 63);

// 2. Créer un tableau variant de 0 à 6.3 avec pas de 0.1
$X = [];
foreach ($entiers as $val) {
    $X[] = $val / 10; // Diviser par 10 pour avoir 0.1, 0.2, ..., 6.3
}

// 3. Créer un tableau associatif avec sin(X)
$sinX = [];
foreach ($X as $x) {
    $sinX[$x] = sin($x); // sin() prend la valeur en radians
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tableau de sin(X)</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px 10px;
            text-align: center;
        }

        caption {
            caption-side: top;
            font-weight: bold;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <caption>Tableau des valeurs sin(X)</caption>
        <tr>
            <th>X</th>
            <th>sin(X)</th>
        </tr>
        <?php
        foreach ($sinX as $x => $val) {
            echo "<tr><td>$x</td><td>$val</td></tr>";
        }
        ?>
    </table>
</body>

</html>