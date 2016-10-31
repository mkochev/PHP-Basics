<?php

$input = array( 
				"hello", 
		   		15,
		  		1.234,
		  		array(1,2,3),
		  		(object)[2,34]
		  	);

foreach ($input as $value) {
	if(is_numeric($value)) {
		echo var_dump($value);
	}
	else {
		echo gettype($value) .  "\n";
	}
}

?>