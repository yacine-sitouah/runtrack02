<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="job2bis.php" method="GET">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <input type="submit" value="Envoyer">
    </form>


        
        <?php
        if (!empty($_GET))
        // Parcourir le tableau $_GET et afficher les arguments et leurs valeurs
             echo "<h1>Résultats des arguments GET</h1>
            <table>
                <thead>
            
                    <th>Argument</th>
                    <th>Valeur</th>
                </thead> ";
                
                foreach ($_GET as $argument => $valeur) {
                    echo "<thead>";
                    echo "<td>" . htmlspecialchars($argument) . "</td>";
                    echo "<td>" . htmlspecialchars($valeur) . "</td>";
                    echo "</thead>";
            
        }
                    echo "</table>";
        ?>
</body> 
</html>