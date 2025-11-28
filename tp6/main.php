<?php
require("connect.php");
$dsn = "mysql:dbname=" . BASE . ";host=" . SERVEUR;
try {
    $connexion = new PDO($dsn, USER, PASSWSD);
} catch (PDOException $e) {
    //throw $th;
    printf("echec de la connexion ");
    exit();
}
$sql = "SELECT * FROM CARNET";
if (!$connexion->query($sql)) {
    echo "Erreur de requete";
} else {
    foreach ($connexion->query($sql) as $row) {
        echo $row['PRENOM'] . " " . $row['NOM'] . " ne(e) le " . $row['NAISSANCE'] . "<br/>\n";
    }
}
