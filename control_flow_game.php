<?php
echo "Let's play a game!";
echo "High number wins!";
echo "Pick a number between 0 and 9";


$input = rtrim(fgets(STDIN));
$mynumber = rand ($min, $max);
$yournumber = (int)$input;
$min = 1;
$max = 9;

if ($mynumber == $yournumber) {
echo "Play again\n";
} elseif ($mynumber < $yournumber) {
    echo "You cheated pick again!\n";
} else { 
    echo "I won!\n";
}


