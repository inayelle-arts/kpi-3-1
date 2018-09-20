<?php

function readFloatValue(string $variableName) : float 
{
	$value = readline("Enter {$variableName}: ");
	
	if ((float)($value) === false) {
		echo "Bad value, try again!".PHP_EOL;
		return readFloatValue($variableName);
	}
	
	return $value;
}

function firstExpression(float $x) : float 
{
	return asin(cos($x));
}

function anotherExpression(float $x) : float
{
	return $x + exp($x);
}

function main() : void
{
	echo "WHILE:\n";
	$leftBound = readFloatValue('left bound');
	$rightBound = readFloatValue('right bound');
	$step = 0.1;
	
	while ($leftBound <= $rightBound) {
		echo "arcsin(cos($leftBound)) = " . firstExpression($leftBound).PHP_EOL;
		echo "x + e^x = " . anotherExpression($leftBound).PHP_EOL;
		$leftBound += $step;
	}
}

function anotherMain() : void
{
	echo "DO-WHILE\n";
	$leftBound = readFloatValue('left bound');
        $rightBound = readFloatValue('right bound');
        $step = 0.1;
	
	do {
                echo "arcsin(cos($leftBound)) = " . firstExpression($leftBound).PHP_EOL;
                echo "x + e^x = " . anotherExpression($leftBound).PHP_EOL;
                $leftBound += $step;
        } while ($leftBound <= $rightBound);

}

main();



