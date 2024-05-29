<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        // Fonction qui met en gras les mots commençant par une lettre majuscule
        function gras($str) {
            return preg_replace_callback('/\b[A-Z][a-zA-Z]*\b/', function($matches) {
                return "<b>" . $matches[0] . "</b>";
            }, $str);
        }

        // Fonction qui applique le chiffrement de César
        function cesar($str, $decalage = 2) {
            $result = '';
            $decalage = (int)$decalage;
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $asciiOffset = ctype_upper($char) ? 65 : 97;
                    $result .= chr(( $ord ($char) - $asciiOffset + $decalage) % 26 + $asciiOffset);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        // Fonction qui ajoute un underscore aux mots finissant par "me"
        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        // Application de la transformation choisie
        switch ($fonction) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str, 2);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
            default:
                echo "Choix de transformation non valide.";
        }
    }
    ?>
</body>
</html>