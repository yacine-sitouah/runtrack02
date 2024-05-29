<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : Division par zéro";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : Division par zéro";
            }
        default:
            return "Erreur : Opération non valide";
    }
}
echo calcule(10, '+', 5); // Affichera 15
echo "<br />";
echo calcule(10, '-', 5); // Affichera 5
echo "<br />";
echo calcule(10, '*', 5); // Affichera 50
echo "<br />";
echo calcule(10, '/', 5); // Affichera 2
echo "<br />";
echo calcule(10, '%', 5); // Affichera 0
echo "<br />";
echo calcule(10, '/', 0); // Affichera "Erreur : Division par zéro"
echo "<br />";
echo calcule(10, '^', 5); // Affichera "Erreur : Opération non valide"
?>
