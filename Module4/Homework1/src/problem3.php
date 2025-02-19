<?php 
declare(strict_types=1);
include 'tictactoe.php';
$board = isset($_GET['board']) ? json_decode($_GET['board'], true) : null;
$turn = isset($_GET['turn']) ? (int)$_GET['turn'] : rand(1, 2);

// Start a new game if there's no board
$game = new TicTacToe($board);
$board = $game->get_board();
$message = "Player $turn's turn.";

// Handle player move
if (isset($_GET['move'])) {
    $pos = (int)$_GET['move'];
    $symbol = ($turn === 1) ? 'X' : 'O';

    // Check if the position is available
    if ($game->check_availability($pos)) {
        $game->move($pos, $symbol);
        $board = $game->get_board();

        if ($game->check_wins()) {
            $message = "Player $turn wins!";
        } else {
            $turn = $game->take_turns($turn);
            $message = "Player $turn's turn.";
        }
    } else {
        $message = "Position already taken. Choose another.";
    }
}

// Convert board to JSON for passing via URL
$boardJson = json_encode($board);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>
<body>
<!--
                                Problem 3: Tic Tac Toe Game
                                ===============================
    Implement a browser based Tic Tac Toe Game using PHP. 
    Here is the implementation details.
    You must write all of the following functions in the `tictactoe.php` file.

    1. Write a function called initialize_board() that returns a 3 X 3 grid. 
       The function will display a 3 X 3 grid containing the numbers 1 to 9.
                     ____________
                    | 1 | 2 | 3 | 
                    | 4 | 5 | 6 | 
                    | 7 | 8 | 9 |
                    ------------
    2. Write a function called take_turns() that switches the turn. 
       The function will take the previous turn as its argument and determines
       the next turn. Determine the initial turn by generating a random number
       between 1 and 2 inclusive. The function will return the next turn.

    3. Write the following function:
            3.1. check_diagonals() - checks if the diagonal element are the same.
            3.2. check_rows() - checks if the row elements are the same.
            3.3. check_cols() - checks if the column elements are the same.
    4. Write a function called  
     that asks the player to choose a position 
    to move to and places their symbol at the position if the position is available.
    
    5. Write a function called check_availability() that returns true if the position chosen
       by the player is available, otherwise false.
       
    6. Write a function called check_win() that check if there is a win.
       This function must return a boolean value true if a player wins, false otherwise.
       N.B. If no more move is possible, the game is a tie.

    Note: You can write the functions in a separate file and then include that file at the top
    of this file. 
-->
<title>Tic Tac Toe</title>
    <style>
        table { border-collapse: collapse; margin-top: 10px; }
        td { width: 50px; height: 50px; text-align: center; border: 1px solid black; font-size: 24px; cursor: pointer; }
        button { margin-top: 10px; padding: 10px; font-size: 16px; }
    </style>
</head>
<body>
    <h2>Tic Tac Toe</h2>
    <p id="message"><?php echo $message; ?></p>

    <table>
        <?php foreach ($board as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td onclick="makeMove(<?php echo $cell; ?>)">
                        <?php echo ($cell === 'X' || $cell === 'O') ? $cell : ''; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <button onclick="restartGame();">Restart Game</button>

    <script>
        function makeMove(position) {
            window.location.href = 'problem3.php?move=' + position + '&board=<?php echo urlencode($boardJson); ?>&turn=<?php echo $turn; ?>';
        }

        function restartGame() {
            window.location.href = 'problem3.php';
        }
    </script>

    
</body>
</html>
