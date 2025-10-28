<?php
function ligne($n, $c)
{
    return str_repeat($c, $n);
}
function pyramide($n, $c)
{
    if ($n >= 10) {
        echo "Erreur : la hauteur de la pyramide doit être inférieure à 10.<br>";
        return;
    }

    for ($i = 1; $i <= $n; $i++) {
        echo ligne($i, $c) . "<br>";
    }
}
pyramide(3, '*');
pyramide(12, '#');
