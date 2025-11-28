<?php
require("connect.php");

$dsn = "mysql:dbname=" . BASE . ";host=" . SERVEUR;
$connexion = new PDO($dsn, USER, PASSWSD);

$result = $connexion->query("SELECT * FROM carnet");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des Clients</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2 class="table-title">📄 Liste des Clients</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Naissance</th>
            <th>Ville</th>
        </tr>

        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?= $row["ID"] ?></td>
                <td><?= $row["NOM"] ?></td>
                <td><?= $row["PRENOM"] ?></td>
                <td><?= $row["NAISSANCE"] ?></td>
                <td><?= $row["VILLE"] ?></td>
            </tr>
        <?php } ?>

    </table>

    <a href="form.html" class="add-client-btn">➕ Ajouter un autre client</a>

</body>

</html>