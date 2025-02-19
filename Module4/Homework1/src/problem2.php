<?php 
declare(strict_types=1);

/*
                                Problem 2: Number Guessing Game
                                ===============================
    Implement the Number Guessing Game using PHP. 
    The game starts with asking the user for a start number and end number. The computer will generate
    a secrete number between the start and end numbers. The player will guess the computer number. if 
    the player number is the same as the secrete number, the player wins and the game is over. If the player guesses 
    lower than the secrete number, display to the player that they guessed lower and allow them to guess again. If
    the player guesses higher than the secrete number, display to the player that they guessed higher and allow them
    to guess again. This process will continue until the player guesses the secrete number or the player plays floor((end - start) / 2).
 */

 final class Problem2 {
    public int $secret_number;
    public function get_user_inputs(): array {
        $start = (int) readline("Enter the start number: ");
        $end = (int) readline("Enter the end number: ");
        
        if ($start >= $end) {
            die("Invalid range. Start number must be less than the end number.\n");
        }
        
        $this->secret_number = rand($start, $end);
        return $data =  [$start, $end];

        
    }
    public function compare_guess(int $guess): string {
        if ($guess === $this->secret_number) {
            return "correct";
        } elseif ($guess > $this->secret_number) {
            return "high";
        } else {
            return "low";
        }
    }
 }
 // Run the program locally.
$obj = new Problem2();
$data = $obj->get_user_inputs();

$start =(int)$data[0];
$end = (int)$data[1];
$guess = (int)readline("Enter your guess: ");
$rounds = 1;
$max_rounds = round(($end - $start) / 2);

$choice = $obj->compare_guess($start, $end, $guess);

while ($rounds < $max_rounds) {
    $rounds++;
    if ($choice == "correct") {
        echo "Congratulations! You won in $rounds rounds.";
        break;
    } else if ($choice == "high") {
        $guess = (int)readline("You guessed higher.\nEnter a lower guess: ");
    } else {
        $guess = (int)readline("You guessed lower.\nEnter a higher guess: ");
    }
}
if ($rounds >= $max_rounds) {
    echo "You lost the game.\nPlease try again later.";
}

