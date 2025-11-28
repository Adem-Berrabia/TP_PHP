<?php
require("connect.php");

// Vérification des données
if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["naissance"]) || empty($_POST["ville"])) {
    echo "<script>alert('⚠ Veuillez remplir tous les champs'); window.history.back();</script>";
    exit();
}

// Connexion BD
$dsn = "mysql:dbname=" . BASE . ";host=" . SERVEUR;
$connexion = new PDO($dsn, USER, PASSWSD);

// Insertion dans la table carnet
$sql = "INSERT INTO carnet (NOM, PRENOM, NAISSANCE, VILLE) VALUES (?, ?, ?, ?)";
$stmt = $connexion->prepare($sql);
$stmt->execute([$_POST["nom"], $_POST["prenom"], $_POST["naissance"], $_POST["ville"]]);

echo "<script>alert('✔ Client enregistré avec succès !'); window.location='liste_clients.php';</script>";
