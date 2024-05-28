<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Test</title>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Code PHP pour traiter et afficher les données POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<table border='1'>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>";
        
        foreach ($_POST as $argument => $valeur) {
            echo "<tr>
                    <td>" . htmlspecialchars($argument) . "</td>
                    <td>" . htmlspecialchars($valeur) . "</td>
                  </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>