<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Résultats des arguments POST</title>
</head>
<body>
    <h1>Résultats des arguments POST</h1>
    <?php
    // Compter le nombre d'arguments POST
    $nbArgumentsPost = count($_POST);

    // Afficher le nombre d'arguments POST
    echo "Le nombre d'arguments POST envoyé est : " . $nbArgumentsPost;
    ?>
</body>
</html>
