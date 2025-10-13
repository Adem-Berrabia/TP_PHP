<?php
$i = 0;
while (++$i) {
    echo "----- \$i= " . $i . " <br/> ";
    for ($j = 1; $j <= 15; $j++) {
        echo 'boucle for : $j=' . $j . '<br/>';
        if (($j == 6) || ($j == 8)) {
            echo 'à $j = ' . $j . ' ou $j = ' . $j . '<br/>';
            break 1;
        }
        if (($i == 2) && ($j == 5)) {
            echo 'à $i = ' . $i . ' et $j = ' . $j . '<br/>';
            break 2;
        }
    }
}
