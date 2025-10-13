<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $prenom = "Adem";

    echo "Bonjour " . $prenom . "<br>";

    echo "En majuscules : " . strtoupper($prenom) . "<br>";

    echo "En minuscules : " . strtolower($prenom) . "<br>";

    echo "Nombre de caractères : " . strlen($prenom);
    ?>

</body>

</html>