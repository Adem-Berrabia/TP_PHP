<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<p>PHP version: " . phpversion() . "</p>";
    echo "<p>Navigateur: " . ($_SERVER['HTTP_USER_AGENT']) . "</p>";
    echo "Adresse IP du client : " . $_SERVER['REMOTE_ADDR'];

    ?>



</body>

</html>