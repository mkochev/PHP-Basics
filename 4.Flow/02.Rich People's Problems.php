<!doctype html>
<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="cars" />
			<input type="submit" />
		</form>

		<table border="1">
			<thead>
				<th> Cars </th>
				<th> Colors </th>
				<th> Amount </th>

			</thead>
			<tbody>
				<?php
					


					if (isset($_POST['cars']) && !empty($_POST['cars'])) {

						//$cars = preg_split('/[ ,]/', $_POST["cars"], 0, PREG_SPLIT_NO_EMPTY);
						$cars = explode(" " , $_POST['cars']);
						
						$colors = ["black", "white", "silver", "red", "blue", "yellow", "green"];

						foreach ($cars as $car) {
							echo "<tr><td>$car</td><td>". $colors[array_rand($colors)]. "</td><td>" .rand(1,5) ."</td></tr>";
							var_dump($car);
						}

					}
				?>
			</tbody>
		</table>
	</body>
</html>