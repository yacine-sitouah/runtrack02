<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Résultats des arguments GET</title>
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
    <h1>Résultats des arguments GET</h1>
    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <?php
        // Parcourir le tableau $_GET et afficher les arguments et leurs valeurs
        foreach ($_GET as $argument => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($argument) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>