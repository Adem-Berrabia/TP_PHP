<?php
$age = random_int(1, 100);
echo "$age";
echo "\n";
switch ($age) {
    case ($age < 10):
        echo "enfant";
        break;
    case ($age >= 10 && $age < 19):
        echo "adolescent";
        break;
    case ($age >= 20 && $age < 39):
        echo "Jeune ";
        break;
    case ($age >= 40 && $age < 59):
        echo "Adulte ";
        break;
    case ($age >= 60):
        echo "Vieux ";
        break;
    default:
        echo "Error";
        break;
}
