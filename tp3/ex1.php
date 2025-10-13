<?php
$Mois = [
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Table des jours des mois</title>
</head>

<body>
    <div style="text-align: center;">
        <table border="1" style="margin: auto;">
            <tr>
                <th>Mois</th>
                <th>Nombre de jours</th>
            </tr>
            <?php
            foreach ($Mois as $mois => $jours) {
                echo "<tr><td>$mois</td><td>$jours</td></tr>";
            }
            ?>
            <caption style="caption-side: bottom;">Table de nombre de jours des mois de l'année</caption>
        </table>
    </div>
</body>

</html>