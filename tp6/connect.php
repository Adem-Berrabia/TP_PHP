<?php
// Database credentials
define("USER", "root");
define("PASSWSD", "");
define("SERVEUR", "localhost");
define("BASE", "tpphp");

try {
    // Create a PDO connection
    $connexion = new PDO(
        "mysql:host=" . SERVEUR . ";dbname=" . BASE . ";charset=utf8",
        USER,
        PASSWSD
    );

    // Set PDO to throw exceptions on error
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Stop execution and display error
    die("Erreur de connexion à la base : " . $e->getMessage());
}
?>
