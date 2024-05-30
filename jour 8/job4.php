<?php
// Durée du cookie (1 jour)
$cookie_duration = time() + 86400;

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    // Stocke le prénom dans un cookie
    setcookie("prenom", htmlspecialchars($_POST['prenom']), $cookie_duration);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['deco'])) {
    // Supprime le cookie en le définissant avec une date d'expiration passée
    setcookie("prenom", "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion avec Prénom</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <h1>Bonjour <?php echo $_COOKIE['prenom']; ?> !</h1>
        <form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <h1>Formulaire de Connexion</h1>
        <form method="post" action="">
            <input type="text" name="prenom" required placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>