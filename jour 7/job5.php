<?php
function occurrences($str, $char) {
    $count = 0;
    // Parcourt chaque caractère de la chaîne
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return $count;
}

// Exemples d'utilisation
$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char); // Affichera 2
?>