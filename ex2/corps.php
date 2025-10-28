<?php
include("debut.php");

function afficheTab5()
{
    echo "<table>";
    echo "<tr><th>Multiplicande</th><th>Résultat</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * 5;
        echo "<tr><td>5 x $i</td><td>$result</td></tr>";
    }
    echo "</table>";
}

afficheTab5();

include("fin.php");
