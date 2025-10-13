<?php
$evenements = [
    [
        "Nom" => "Nouvel An",
        "Date" => "01/01/2025"
    ],
    [
        "Nom" => "Fête du Travail",
        "Date" => "01/05/2025"
    ],
    [
        "Nom" => "Noël",
        "Date" => "25/12/2025"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Événements importants de l'année</title>
</head>

<body>
    <p>Date actuelle : <?php echo date("d/m/Y"); ?></p>

    <!-- 3. Afficher chaque événement sous forme de tableau HTML -->
    <table border="1" align="center">
        <tr>
            <th>Nom de l'événement</th>
            <th>Date</th>
        </tr>
        <?php
        foreach ($evenements as $event) {
            echo "<tr><td>{$event['Nom']}</td><td>{$event['Date']}</td></tr>";
        }
        ?>
    </table>

    <!-- 4. Afficher le tableau brut avec print_r -->
    <pre>
<?php print_r($evenements); ?>
    </pre>
</body>

</html>