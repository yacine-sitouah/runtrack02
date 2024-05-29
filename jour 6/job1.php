<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec styles</title>
    <?php
        $style = isset($_POST['style']) ? $_POST['style'] : 'style1';
        echo '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($style) . '.css">';
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if ($style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>