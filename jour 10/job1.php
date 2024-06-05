
<?php
$mysqli = mysqli_connect("localhost", "root", "", "jour9");

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

$results = mysqli_query($mysqli, "SELECT * FROM etudiant");

if (!$results) {
    die("Error: " . mysqli_error($mysqli));
}

?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des étudiants</title>
        <link href="job1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1> Liste des étudiants </h1>
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($results)) {
                    echo "<tr>";
                    echo "<td>" . $row['prenom'] . "</td>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['naissance'] . "</td>";
                    echo "<td>" . $row['sexe'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>

        <?php
        mysqli_close($mysqli);
        ?>
        
    </body>
    </html>