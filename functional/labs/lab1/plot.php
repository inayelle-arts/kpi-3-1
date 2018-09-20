<?php

function expression(float $x, float $a) : float
{
	return pow($a, 3) / (pow($x, 2) + pow($a, 2));
}

function getData(float $leftBound, float $rightBound, float $step) : array
{
	$data = [];
	while ($leftBound <= $rightBound) {
		$data[(string)$leftBound] = expression($leftBound, $step);
		$leftBound += $step;
	}
	
	return $data;
}

/**
 * var trace1 = {
 * x: [1, 2, 3, 4],
 * y: [10, 15, 13, 17],
 * type: 'scatter'
};
 */
function generateScript(array $data) : string
{
	$xJson = json_encode(array_keys($data));
	$yJson = json_encode(array_values($data));
	
	$script = "trace = {x: $xJson,y:$yJson,type:'scatter'};";
	
	return $script;
}


function main() : string 
{
	$x1   = -2;
	$x2   = 2;
	$step = 0.1;

	$data = getData($x1, $x2, $step);
	
	return generateScript($data);
}

return main();