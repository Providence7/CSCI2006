<?php 
declare(strict_types=1);
final class TicTacToe {
    private array $board;

    public function __construct(?array $existingBoard = null) {
        $this->board = $existingBoard ?? $this->initialize_board();
    }

    public function take_turns($turn): int {
        return $turn === 1 ? 2 : 1;
    }

    // Write a function to initialize the board content.
    public function initialize_board(): array {
        return [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]; 
    }
    // Write a function to check if a position to move to is available
    public function check_availability( $pos): bool {
        
        foreach ($this->board as $row) {
            if (in_array($pos, $row)) {
                return true;
            }
        }
        return false;
    }

    // Write a function to check if the diagonal elements are the same.
    public function check_diagonals(): bool {
        return ($this->board[0][0] === $this->board[1][1] && $this->board[1][1] === $this->board[2][2]) ||
        ($this->board[0][2] === $this->board[1][1] && $this->board[1][1] === $this->board[2][0]);
    }

    // Write the function to check if columns contain the same symbols.
    public function check_cols(): bool {
        for ($col = 0; $col < 3; $col++) {
            if ($this->board[0][$col] === $this->board[1][$col] && $this->board[1][$col] === $this->board[2][$col]) {
                return true;
            }
        }
        return false;
    
    }

    // Write the function to check if rows contain the same symbols.
    public function check_rows(): bool {
         foreach ($this->board as $row) {
            if ($row[0] === $row[1] && $row[1] === $row[2]) {
                return true;
            }
        }
        return false; 
    }

    // Write a function to make a move to a position.
    public function move($pos, $symbol): bool {
        
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($this->board[$i][$j] == $pos) { 
                    $this->board[$i][$j] = $symbol; // Update the board
                    return true;
                }
            }
        }
        return false;
    }

    // Write a function to check a win.
    public function check_wins(): bool {
        return $this->check_rows() || $this->check_cols() || $this->check_diagonals(); 
    }
    public function get_board(): array {
        return $this->board;
    }
}
