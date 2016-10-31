<?php
function nonRepeatingNumbers($max) {
	$numbers = array();

	for ($i = 100; $i <= min($max,987); $i++) {
	

		$currentNumbers = strval($i);
		if ( $currentNumbers[0] != $currentNumbers[1] && $currentNumbers[1] != $currentNumbers[2] && $currentNumbers[0] != 
			$currentNumbers[2])
		{
			$numbers[] = $i;
		}
	}

		return ($numbers ? implode(", ", $numbers) : "no") . "<br /><br />";
	}


echo nonRepeatingNumbers(1234);
echo nonRepeatingNumbers(14);
?>