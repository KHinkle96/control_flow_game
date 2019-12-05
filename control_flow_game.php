<?php
$gamerunning = true;
while ($gamerunning) {

echo "Let's play a game!\n";
echo "High number wins!\n";
echo "Pick a number between 0 and 9\n";

$input = rtrim(fgets(STDIN));
$mynumber = mt_rand(1,9);
$yournumber = (int)$input;

if ($mynumber == $yournumber) {
echo "It's a tie, play again\n";
} elseif ($mynumber < $yournumber) {
    echo "You cheated pick again!\n";
} else { 
    echo "I won!\n";
    $gamerunning = false;
}
}
?>