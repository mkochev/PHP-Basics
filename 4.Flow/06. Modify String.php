<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Primes in Range </title>

	</head>
	<body>
		<form method="POST">
			<label for="range">Input string </label>
			<input type="text" name="string" />
			<input type="radio" name="operation" value="palindrome" />
			<label for="palindrome"> Check Palindrome </label>
			<input type="radio" name="operation"  value="reverse" />
			<label for="reverse"> Reverse String </label>
			<input type="radio" name="operation" value="splitStr" />
			<label for="split"> Slpit </label>
			<input type="radio" name="operation" value="hashStr" />
			<label for="hash"> Hash String </label>
			<input type="radio" name="operation" value="shuffle" />
			<label for="shuffle"> Shuffle String </label>
			
			<input type="submit" />


		</form>
			<?php
			if (isset($_POST['string']) && !empty($_POST['string'])){

				$strCheck = $_POST['string'];
				$strReverse = strrev($strCheck);
				$operation  = $_POST['operation'];

				$result = "Something is wrong!";
				$allowedOps = ['palindrome', 'reverse', 'splitStr', 'hashStr', 'shuffle'];

				if (in_array($_POST['operation'], $allowedOps) && !isset($_POST['operation'])) {

					if ($operation == 'palindrome') {
					    if ($strCheck == $strReverse) {
					    	echo  "$strCheck is a Palindrome!";
					    }
					    else {
					    	echo  "$strCheck is not a Palindrome!";
					    }
					}



					if ($operation == 'reverse') {
						echo $strReverse;
					}

					if ($operation == 'splitStr') {
						$masiv = str_split($strCheck);
						echo implode($masiv, " ");
					}

					if ($operation == 'hashStr') {
						echo crypt($strCheck);
					}

					if ($operation == 'shuffle') {
						echo str_shuffle($strCheck);
					}

				}
				else {
					echo "Choose an operation";
				}


			}
			
			?>

		
	</body>

</html>