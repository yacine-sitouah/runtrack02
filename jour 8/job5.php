<?php
session_start();

if (!isset($_SESSION['board'])) {
    resetGame();
}

if (isset($_POST['reset'])) {
    resetGame();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['cell']) && !isset($_SESSION['winner'])) {
    $cell = $_POST['cell'];
    $currentPlayer = $_SESSION['currentPlayer'];

    if ($_SESSION['board'][$cell] === '-') {
        $_SESSION['board'][$cell] = $currentPlayer;
        checkWinner();
        $_SESSION['currentPlayer'] = $currentPlayer === 'X' ? 'O' : 'X';
    }
}

function resetGame() {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
    unset($_SESSION['winner']);
}

function checkWinner() {
    $board = $_SESSION['board'];
    $winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // columns
        [0, 4, 8], [2, 4, 6]             // diagonals
    ];

    foreach ($winningCombinations as $combo) {
        if ($board[$combo[0]] !== '-' && 
            $board[$combo[0]] === $board[$combo[1]] && 
            $board[$combo[1]] === $board[$combo[2]]) {
            $_SESSION['winner'] = $board[$combo[0]];
            return;
        }
    }

    if (!in_array('-', $board)) {
        $_SESSION['winner'] = 'draw';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 60px; height: 60px; text-align: center; }
        button { width: 100%; height: 100%; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <?php if (isset($_SESSION['winner'])): ?>
        <h2>
            <?php
                if ($_SESSION['winner'] === 'draw') {
                    echo "Match nul !";
                } else {
                    echo $_SESSION['winner'] . " a gagné !";
                }
            ?>
        </h2>
    <?php endif; ?>
    <form method="post" action="">
        <table border="1">
            <?php for ($row = 0; $row < 3; $row++): ?>
                <tr>
                    <?php for ($col = 0; $col < 3; $col++): ?>
                        <?php $index = $row * 3 + $col; ?>
                        <td>
                            <?php if ($_SESSION['board'][$index] === '-'): ?>
                                <button type="submit" name="cell" value="<?php echo $index; ?>">-</button>
                            <?php else: ?>
                                <?php echo $_SESSION['board'][$index]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </form>
    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>