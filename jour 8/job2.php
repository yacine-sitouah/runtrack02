<?php
// Nom du cookie
$cookie_name = "nbvisites";

// Durée du cookie (1 jour)
$cookie_duration = time() + (86400 * 30);

// Vérifie si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialise le cookie en le supprimant
    setcookie($cookie_name, "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Vérifie si le cookie existe
if(isset($_COOKIE[$cookie_name])) {
    // Incrémente le nombre de visites
    $nbvisites = $_COOKIE[$cookie_name] + 1;
} else {
    // Initialise le compteur de visites
    $nbvisites = 1;
}

// Met à jour le cookie avec le nouveau compteur
setcookie($cookie_name, $nbvisites, $cookie_duration);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec Cookie</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $nbvisites; ?></h1>
    <form method="post" action="">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>