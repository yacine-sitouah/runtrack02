<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="result.php" method="GET">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
// result.php

// Compter le nombre d'arguments GET
$nbArgumentsGet = count($_GET);

// Afficher le nombre d'arguments GET
echo "Le nombre d'arguments GET envoyé est : " . $nbArgumentsGet;
?>

</body>
</html>