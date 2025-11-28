<?php
require("connect.php");

$dsn = "mysql:dbname=" . BASE . ";host=" . SERVEUR;

try {
    $connexion = new PDO($dsn, USER, PASSWSD);
} catch (PDOException $e) {
    echo "❌ Échec de connexion à la base de données";
    exit();
}

$sql = "SELECT * FROM CARNET";
$result = $connexion->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Liste du Carnet</title>
</head>

<body>

    <h2>Liste du Carnet</h2>

    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
        </tr>

        <?php
        if ($result) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['PRENOM'] . "</td>";
                echo "<td>" . $row['NOM'] . "</td>";
                echo "<td>" . $row['NAISSANCE'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>❌ Erreur lors de l'exécution de la requête</td></tr>";
        }
        ?>

    </table>

</body>

</html>