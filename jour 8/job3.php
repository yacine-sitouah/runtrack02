<?php
session_start();

// Vérifie si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialise la liste des prénoms en supprimant la variable de session
    unset($_SESSION['prenoms']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Vérifie si le formulaire a été soumis
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    // Ajoute le prénom à la variable de session
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Prénoms</title>
</head>
<body>
    <h1>Ajouter un Prénom</h1>
    <form method="post" action="">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>
    <form method="post" action="">
        <button type="submit" name="reset">Reset</button>
    </form>

    <h2>Liste des Prénoms :</h2>
    <ul>
        <?php
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . $prenom . "</li>";
            }
        } else {
            echo "<li>Aucun prénom ajouté</li>";
        }
        ?>
    </ul>
</body>
</html>