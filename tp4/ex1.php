<?php
// function afficheTabMulti()
// {
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>Multiplication</th><th>Résultat</th></tr>";
//     for ($i = 1; $i <= 10; $i++) {
//         echo "<tr><td>4 x $i</td><td>" . (4 * $i) . "</td></tr>";
//     }
//     echo "</table>";
// }

// afficheTabMulti();
function afficheTabMulti($n)
{
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Multiplication</th><th>Résultat</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$n x $i</td><td>" . ($n * $i) . "</td></tr>";
    }
    echo "</table>";
}

// Exemple d’appel
afficheTabMulti(4);
