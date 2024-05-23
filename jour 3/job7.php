<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de chaîne</title>
</head>
<body>
<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = strlen($str);
$newStr = "";

for ($i = 0; $i < $length; $i++) {
    if ($i == $length - 1) {
        $newStr .= $str[0];  // Le dernier caractère est remplacé par le premier
    } else {
        $newStr .= $str[$i + 1];  // Chaque caractère est remplacé par le suivant
    }
}

echo $newStr;
?>
</body>
</html>