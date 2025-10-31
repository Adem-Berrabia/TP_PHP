<?php
function ligne($n, $c)
{
    return str_repeat($c, $n);
}

echo ligne(5, "*"); 
function pyramide($n, $c)
{
    for ($i = 1; $i <= $n; $i++) {
        echo ligne($i, $c) . "<br>";
    }
}

pyramide(3, "*");
