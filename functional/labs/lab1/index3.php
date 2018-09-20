<?php

function getArray() : array
{
	return
			[
				1,
				2,
				3,
				'string',
				[
						'elem1',
						'elem2',
						'elem3',
						'elem4'
				],[
						'elem1',
						'elem2',
						'elem3',
						'elem4'
				],
			];
}

function removeComplexElements(array $array) : array
{
	$processedArray = [];
	
	foreach ($array as $item) {
		if (!is_array($item)) {
			$processedArray[] = $item;
		}
	}
	
	return $processedArray;
}

function filterEverySecondElement(array $data) : array
{
	$index = 0;
	$length = count($data);
	
	while ($index < $length) {
		if ($index % 2 == 1) {
			unset($data[$index]);
		}
		
		++$index;
	}
	
	return $data;
}

function main() : void
{
	$data = getArray();
	echo "Initial array\n";
	var_dump($data);
	$data = removeComplexElements($data);
	echo "Atomic array\n";
	var_dump($data);
	
	$data = getArray();
	$data = filterEverySecondElement($data);
	echo "Filtered array\n";
	var_dump($data);
}

main();