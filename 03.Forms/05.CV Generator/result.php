<?php
	include 'include.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> CV </title>
	</head>
	<body>
		<h3> CV </h3>
		<table border="1px solid black">
			<thead>
				<tr>
					<th colspan="2"> Personal Information </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> First Name </td>
					<td> <?= $fname ?> </td>
				</tr>
				<tr>
					<td> Last Name </td>
					<td> <?= $lname ?> </td>
				</tr>
				<tr>
					<td> Email </td>
					<td> <?= $email ?> </td>
				</tr>
				<tr>
					<td> Phone Number</td>
					<td> <?= $phone ?> </td>
				</tr>
				<tr>
					<td> Gender </td>
					<td> <?= $gender ?> </td>
				</tr>
				<tr>
					<td> Birth Date </td>
					<td> <?= $bdate ?> </td>
				</tr>
				<tr>
					<td> Nationality </td>
					<td> <?= $nation ?> </td>
				</tr>
			</tbody>
		</table>

		<table border="1px solid black">
			<thead>
				<tr>
					<th colspan="2"> Last Work Position </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> Company Name </td>
					<td> <?= $company ?> </td>
				</tr>
				<tr>
					<td> From </td>
					<td> <?= $from ?> </td>
				</tr>

				<tr>
					<td> To </td>
					<td> <?= $to ?> </td>
				</tr>
			</tbody>
		</table>

		<table border="1px solid black">
			<thead>
				<tr>
					<th colspan="3"> Computer skills </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> Language </td>
					<td> Skill Level </td>
				</tr>
				<tr>
				<?php 
					$length = count($pclang);
					for ($i = 0; $i < $length; $i++)
					{
						echo '<tr></tr>';
						echo "<td> $pclang[$i]</td>"; 
						for ($j = $i; $j < $length; $j++) {
							echo "<td>$pcskill[$j]</td>";
							break;
						}
						
					}
				?> <!-- 
				   <?php
                        $length = count($pclang);
                        for ($i = 0; $i < $length; $i++) 
                        {
                            echo '<tr></tr>';
                            echo "<td>$pclang[$i]</td>";
                            for ($j = $i; $j < $length; $j++) {
                                echo "<td>$pcskill[$j]</td>";
                                break;
                            }
                        }
                        ?> -->
				</tr>
			</tbody>
		</table>

		<table border="1px solid black">
			<thead>
				<tr>
					<th colspan="4"> Other Skills </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> Language </td>
					<td> Comprehension </td>
					<td> Reading </td>
					<td> Writing </td>
				</tr>
				<tr>
                        <?php
                        $length2 = count($language);
                        for ($i = 0; $i < $length2; $i++) {
                            echo '<tr></tr>';
                            echo "<td>$language[$i]</td>";
                            for ($j = $i; $j < $length2; $j++) {
                                echo "<td>$compreh[$j]</td>";
                                for ($k = $j; $k < $length2; $k++) {
                                    echo"<td>$reading[$k]</td>";
                                    for ($p = $k; $p < $length2; $p++) {
                                        echo "<td>$writing[$p]</td>";
                                        break;
                                    }
                                    break;
                                }
                                break;
                            }
                        }
                        ?>
                    </tr>
				<tr>
					<td> Driver's License </td>
					<td> <?= implode(',', $drivers); ?> </td>
				</tr>	
			</tbody>
		</table>
	</body>
</html>