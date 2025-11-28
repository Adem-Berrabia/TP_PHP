<?php
require("connect.php");

// Sanitize POST data
$nom = htmlspecialchars($_POST["nom"] ?? '');
$prenom = htmlspecialchars($_POST["prenom"] ?? '');
$naissance = $_POST["naissance"] ?? '';
$ville = htmlspecialchars($_POST["ville"] ?? '');
$adresse = htmlspecialchars($_POST["adresse"] ?? '');
$postal = htmlspecialchars($_POST["postal"] ?? '');

// Validate required fields
if (!$nom || !$prenom || !$naissance || !$ville || !$adresse || !$postal) {
    echo "<script>alert('⚠ Veuillez remplir tous les champs'); window.history.back();</script>";
    exit();
}

// Validate date
if (!strtotime($naissance)) {
    echo "<script>alert('⚠ Date de naissance invalide'); window.history.back();</script>";
    exit();
}

// Insert into database
try {
    $sql = "INSERT INTO carnet (NOM, PRENOM, NAISSANCE, VILLE, ADRESSE, POSTAL) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$nom, $prenom, $naissance, $ville, $adresse, $postal]);

    echo "<script>alert('✔ Client enregistré avec succès !'); window.location='liste_clients.php';</script>";
} catch (PDOException $e) {
    echo "<script>alert('❌ Erreur lors de l\\'enregistrement : " . $e->getMessage() . "'); window.history.back();</script>";
}
