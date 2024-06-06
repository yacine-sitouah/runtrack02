<?php
include('config.php');
session_start();

if ($_SESSION['login'] != 'admin') {
    header("Location: connexion.php");
    exit();
}

$sql = "SELECT id, login, prenom, nom FROM utilisateurs";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Administration</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["login"]. "</td><td>" . $row["prenom"]. "</td><td>" . $row["nom"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Aucun utilisateur trouvé</td></tr>";
        }
        ?>
    </table>
</body>
</html>