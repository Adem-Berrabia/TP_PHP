<?php
function alert($message)
{
    echo "<script>alert('$message');</script>";
    return true;
}

// Exemple
alert("Bonjour Adem !");
