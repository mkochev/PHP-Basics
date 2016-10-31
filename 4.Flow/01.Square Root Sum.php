<!DOCTYPE html>
<html>
<body>
	<table border="1">

	<thead>
		<tr>
			<th> Number </th>
			<th> Square </th>
		</tr>
	</thead>
		<tbody>

		<?php 
			$sum = 0;
			for ($i = 0; $i <= 100; $i+= 2) {
				echo "<tr><td>$i</td><td>" .  round(sqrt($i),2 ) . "</td></tr>";
				$sum += sqrt($i);
				
				
			}

		?>
		<tbody>
		<tfoot>
		    <tr>
		        <td><strong>Total:</strong></td>
		        <td><?= round($sum, 2) ?></td>
		    </tr>
	    </tfoot>
	</table>
</body>
</html>
