<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher la chaîne à l'envers</title>
</head>
<body>
<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reversedStr = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;
?>
</body>
</html>
