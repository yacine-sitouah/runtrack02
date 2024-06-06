<?php
include('config.php');
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: connexion.php");
    exit();
}

$login = $_SESSION['login'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $password = md5($_POST['password']);

    $sql = "UPDATE utilisateurs SET prenom='$prenom', nom='$nom', password='$password' WHERE login='$login'";

    if ($conn->query($sql) === TRUE) {
        echo "Mise à jour réussie.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}

$sql = "SELECT prenom, nom FROM utilisateurs WHERE login='$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $prenom = $row['prenom'];
    $nom = $row['nom'];
} else {
    echo "Utilisateur non trouvé.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Profil</h2>
    <form method="post" action="profil.php">
        <label>Prénom:</label><input type="text" name="prenom" value="<?php echo $prenom; ?>" required><br>
        <label>Nom:</label><input type="text" name="nom" value="<?php echo $nom; ?>" required><br>
        <label>Mot de passe:</label><input type="password" name="password" required><br>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>