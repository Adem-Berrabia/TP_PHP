<?php
$entiers = range(1, 63);

$X = [];
foreach ($entiers as $val) {
    $X[] = $val / 10; 
}

$sinX = [];
foreach ($X as $x) {
    $sinX[$x] = sin($x); 
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tableau de sin(X)</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px 10px;
            text-align: center;
        }

        caption {
            caption-side: top;
            font-weight: bold;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <caption>Tableau des valeurs sin(X)</caption>
        <tr>
            <th>X</th>
            <th>sin(X)</th>
        </tr>
        <?php
        foreach ($sinX as $x => $val) {
            echo "<tr><td>$x</td><td>$val</td></tr>";
        }
        ?>
    </table>
</body>

</html>