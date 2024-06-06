<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $hashed_password = md5($password);

        $sql = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: connexion.php");
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title class="inscription"> Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="inscription.php">
        <label>Login:</label><input type="text" name="login" required><br>
        <label>Prénom:</label><input type="text" name="prenom" required><br>
        <label>Nom:</label><input type="text" name="nom" required><br>
        <label>Mot de passe:</label><input type="password" name="password" required><br>
        <label>Confirmer mot de passe:</label><input type="password" name="confirm_password" required><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>