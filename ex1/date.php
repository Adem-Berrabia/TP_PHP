<?php
function afficherDateFR() {
    $jours = [
        "Monday" => "Lundi",
        "Tuesday" => "Mardi",
        "Wednesday" => "Mercredi",
        "Thursday" => "Jeudi",
        "Friday" => "Vendredi",
        "Saturday" => "Samedi",
        "Sunday" => "Dimanche"
    ];

    $mois = [
        "January" => "Janvier",
        "February" => "Février",
        "March" => "Mars",
        "April" => "Avril",
        "May" => "Mai",
        "June" => "Juin",
        "July" => "Juillet",
        "August" => "Août",
        "September" => "Septembre",
        "October" => "Octobre",
        "November" => "Novembre",
        "December" => "Décembre"
    ];

    $jourAng = date('l'); // Jour anglais
    $jourNum = date('j'); // Numéro du jour
    $moisAng = date('F'); // Mois anglais
    $annee = date('Y');   // Année

    return "Nous sommes le " . $jours[$jourAng] . " " . $jourNum . " " . $mois[$moisAng] . " " . $annee . ".";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Date en temps réel</title>
</head>
<body>
    <h1>Date en temps réel</h1>
    <p>
        <?php
        echo afficherDateFR(); // Appel de la fonction
        ?>
    </p>
</body>
</html>
