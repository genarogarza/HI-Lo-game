<?php


// verifies there are min and max argument

if ($argc < 3) {
	echo " please run cmd again and enter min and max value after filename\n";
	exit(1);
}	

// generates number to guess using input arguments

$x = rand($argv[1],$argv[2]);
echo "{$x}\n";

$guesses = 0;

// receives users guess
fwrite(STDOUT, "guess a number betwen {$argv[1]} and {$argv[2]}\n");

// response evaluation
	do	{
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

