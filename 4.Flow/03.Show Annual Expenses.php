<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Annual Expenses </title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="years" />
			<input type="submit" />
		</form>
		<table border="1">
			<thead>
				<tr>
					<th> Year</th>
					
					<?php
						
						function getMonth($number)
						{
						    return date("F", strtotime(date("d-$number-Y")));
						}
						
						for($month = 1; $month <= 12; $month++) {
							echo "<th>" .getMonth($month) . "</th>";
						}
					
					?>
				<th> Total</th>
				</tr> 


			</thead>
			<tbody>
				<?php

					if( isset($_POST['years']) && !empty($_POST['years'])) {

						$currentYear = date('Y');
						$years = $_POST['years'];
						$range = rand(0,999);

					

						for ($year = $currentYear; $year > $currentYear - $years; $year--) {

				            echo "<tr><td>$year</td>";
				            $total = 0;

				            for ($month = 1; $month <= 12; $month++) {
				                $currentCost = rand(0, 999);
				                echo "<td>" . $currentCost . "</td>";
				                $total += $currentCost;
				            }

				            echo "<td>$total</td></tr>";
				        }

				      }
				
				?>
			</tbody>

		</table>
	</body>
</html>