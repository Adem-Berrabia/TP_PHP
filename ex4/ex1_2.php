<?php
$fruits = array("Pomme", "Banane", "Orange", "Kiwi", "Mangue");

echo "Le troisième fruit est : " . $fruits[2] . "<br>";

echo "<h3>Liste des fruits :</h3>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}
$fruits[0] = "Fraise";

$fruits[] = "Ananas";

echo "<pre>";
print_r($fruits);
echo "</pre>";
