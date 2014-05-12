<?php


// gets number to guess

$x = rand(0,100);
echo "{$x}\n";


// evaluates users guess
fwrite(STDOUT, "guess a number betwen 0 and 100\n");

// echo if correct

do{

$guess = fgets(STDIN);

if ($guess == $x){
	echo "Correctamundo !!\n";
	
}
	
// echo if incorrect
	elseif ($guess > $x){
		echo " Lower\n";
}

	else 
		echo "Higher\n";


} while ($guess != $x);

// final output