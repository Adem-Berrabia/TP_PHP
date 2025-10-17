<?php
$mails = array(
    "php5@free.com",
    " jean556@yahoo.fr ",
    "machine@wanadoo.fr ",
    " webmaster@wanadoo.fr ",
    " paul@gmail.fr ",
    "macafi@yahoo.fr "
);

echo "<h3>Liste des mails :</h3>";
foreach ($mails as $mail) {
    echo trim($mail) . "<br>";
}

$hebergeurs = [];
foreach ($mails as $mail) {
    $mail = trim($mail);
    $parts = explode("@", $mail);
    if (isset($parts[1])) {
        $hebergeurs[] = strtolower($parts[1]);
    }
}

echo "<h3>Hébergeurs :</h3>";
foreach ($hebergeurs as $hebergeur) {
    echo $hebergeur . "<br>";
}

$freq = array_count_values($hebergeurs);

$maxFreq = max($freq);
$minFreq = min($freq);

// Trier 
ksort($freq);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Hébergeurs et fréquence</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }

        .max {
            background-color: lightgreen;
            font-weight: bold;
        }

        .min {
            background-color: lightcoral;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Tableau des hébergeurs avec fréquence</h2>
    <table>
        <tr>
            <th>Hébergeur</th>
            <th>Fréquence</th>
        </tr>
        <?php
        foreach ($freq as $hebergeur => $f) {
            $class = "";
            if ($f == $maxFreq) $class = "max";
            elseif ($f == $minFreq) $class = "min";
            echo "<tr class='$class'><td>$hebergeur</td><td>$f</td></tr>";
        }
        ?>
    </table>
</body>

</html>