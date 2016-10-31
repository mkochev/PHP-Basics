<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Primes in Range </title>

	</head>
	<body>
		<form method="GET">
			<label for="range">Starting index </label>
			<input type="number" name="start" />
			<label for="range"> End: </label>
			<input type="number" name="end" />
			<input type="submit" />

		</form>

		<?php

		function isPrime($number) {
		    // This function is optimized really well:
		    if ($number <= 1) {
		        // First, all numbers below 1 cannot be primes,
		        return false;
		    } elseif ($number == 2) {
		        return true;
		    } else if ($number % 2 == 0) {
		        // Second, the number 2 is prime, and all other even numbers are not primes - this shortcut saves about half of the function's work
		        return false;
		    } else {
		        // Third, since we ruled out 2, we can start the checks from 3 and omit all even numbers
		        // What's more, we only need to check the numbers up to the square root of the number we're looking for
		        // (actually to the next highest number), which optimizes the algorithm even more
		        for ($i = 3; $i <= ceil(sqrt($number)); $i += 2) {
		            if ($number % $i == 0) {
		                return false;
		            }
		        }
		        return true;
		    }
		}
			
			$start = $_GET['start'];
			$end = $_GET['end'];

			if(isset($start) && isset($end)) {
				$result = array();

				for($i = 0 ; $i <= $end; $i++) {
					$result[] = isPrime($i) ? "<b>$i</b>" : $i;
				}

				echo implode(",", $result);

			}
		?>
	</body>

</html>