<?php
include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $sql = "SELECT id, login FROM utilisateurs WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['login'] = $login;
        header("Location: ./profil.php");
    } else {
        echo "Login ou mot de passe incorrect.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="connexion.php">
        <label>Login:</label><input type="text" name="login" required><br>
        <label>Mot de passe:</label><input type="password" name="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>