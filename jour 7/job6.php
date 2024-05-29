<?php
function leetSpeak($str) {
    // Tableau associatif pour la conversion en leet speak
    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    // Conversion de la chaîne
    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leet)) {
            $leetStr .= $leet[$char];
        } else {
            $leetStr .= $char;
        }
    }

    return $leetStr;
}

// Exemples d'utilisation
$str = "Bonjour, LaPlateforme!";
echo leetSpeak($str); // Affichera "8onj0ur, 14P1473form3!"
?>