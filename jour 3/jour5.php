<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter Voyelles et Consonnes</title>
</head>
<body>
<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$consonants = range('a', 'z');
$consonants = array_diff($consonants, $vowels);
$consonants = array_merge($consonants, range('A', 'Z'));
$consonants = array_diff($consonants, $vowels);

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
        $dic["voyelles"]++;
    } elseif (in_array($str[$i], $consonants)) {
        $dic["consonnes"]++;
    }
}
?>

<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>