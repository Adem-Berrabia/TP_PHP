<?php
require("connect.php");

try {
    $result = $connexion->query("SELECT * FROM carnet");
} catch (PDOException $e) {
    die("Erreur lors de la récupération des clients : " . $e->getMessage());
}
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
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Naissance</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Code Postal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row["ID"]) ?></td>
                    <td><?= htmlspecialchars($row["NOM"]) ?></td>
                    <td><?= htmlspecialchars($row["PRENOM"]) ?></td>
                    <td><?= htmlspecialchars($row["NAISSANCE"]) ?></td>
                    <td><?= htmlspecialchars($row["VILLE"]) ?></td>
                    <td><?= htmlspecialchars($row["ADRESSE"]) ?></td>
                    <td><?= htmlspecialchars($row["POSTAL"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="form.html" class="add-client-btn">➕ Ajouter un autre client</a>

</body>

</html>