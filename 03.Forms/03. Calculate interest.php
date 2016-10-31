<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Interest </title>
	</head>

	<body>
		<form method="post" action="">
			<input type="number" name="amount" placeholder="Enter amount" />
			<input type="radio" name="currency" value="usd" />
			<label for="usd"> USD </label>
			<input type="radio" name="currency" value="eur" />
			<label for="usd"> EUR </label>
			<input type="radio" name="currency" value="bgn" />
			<label for="usd"> BGN </label> <br/>
			<label for="amount"> Compound Interest Amount </label>
			<input type="number" name="interest" /> <br/>

			<select name="time">
				<option value="6" selected> 6 Months </option>
				<option value="12"> 1 Year  </option>
				<option value="24"> 2 Years </option>
				<option value="60"> 5 Years </option>
			</select>
			<br />
			<input type="submit" name="submit" value="Calculate" />
		</form>

	</body>

	<?php

		if (isset($_POST['submit']) && isset($_POST['amount']) && isset($_POST['interest']) && isset($_POST['currency'])) {

			$amount = htmlentities($_POST['amount']);
			$currency = htmlentities($_POST['currency']);
			$interest = htmlentities($_POST['interest']);
			$period = htmlentities($_POST['time']);
			$period = preg_replace('/[^0-9]/', '', $period);
			$sum = $amount;

			for ($i = 1; $i <= $period; $i++) {
				$sum *= (1 + ($interest / 12) / 100);
			} 

			$currencySymbol = "";

			switch($currency) {
				case "usd" :
					$currencySymbol = htmlentities("$"); 
					echo $currencySymbol . number_format($sum, 2, '.', "");
					break;
				case "eur" :
					$currencySymbol = "€"; 
					echo $currencySymbol . number_format($sum, 2, '.', "");
					break;
				case "bgn" :
					$currencySymbol = "BGN"; 
					echo $currencySymbol . number_format($sum, 2, '.', "");
					break;
				default:
					echo " Error !";
					break;
			}

		}
	?>
</html>