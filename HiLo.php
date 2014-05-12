<?php


// generates number to guess

$x = rand(0,100);
//echo "{$x}\n";

$guesses = 0;

// receives users guess
fwrite(STDOUT, "guess a number betwen 0 and 100\n");

// responses

do {

	$guess = fgets(STDIN);
	// add 1 to #guesses
	$guesses++;
	if ($guess == $x) {
		echo "Correctamundo !!\n";
		echo "it only took you {$guesses} times to guess!\n\n\n\n";
	} elseif ($guess > $x) {
		echo " Lower\n";
	} else {
		echo "Higher\n";
	}



// loop if wrong
} while ($guess != $x);

