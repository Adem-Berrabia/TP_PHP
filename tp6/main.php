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
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    table {
        width: 60%;
        margin: 20px auto;
        border-collapse: collapse;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #007BFF;
        color: white;
    }

    tr:hover {
        background-color: #f1f1f1;
    }
</style>

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