<?php
function triangleDePascal($n)
{
    for ($i = 0; $i < $n; $i++) {
        $val = 1;
        for ($j = 0; $j <= $i; $j++) {
            echo $val . " ";
            $val = $val * ($i - $j) / ($j + 1);
        }
        echo "<br>";
    }
}

triangleDePascal(5);
