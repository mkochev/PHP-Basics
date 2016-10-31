<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<title> Form Data </title>
		</head>
		<body>
			<form method="GET">
				<label for="name"> Name </label>
				<input type="text" name="name" placeholder="Name"/> <br />
				<label for="age"> Age </label>
				<input type="number" name="age" placeholder="Age" /> <br />
				<label for="sex"> Male </label>
				<input type="radio" name="sex" value="male" /> <br />
				<label for="sex"> Female </label>
				<input type="radio" name="sex" value="female" /> <br />
				<input type="submit" name="submit" value="Submit" />
			</form>

			<?php
				var_dump($_GET);
				if (isset($_GET['submit']))	{
					$name = htmlentities($_GET['name']);
					$age = htmlentities($_GET['age']);
					$sex = htmlentities($_GET['sex']);
					echo "My name is " . htmlentities($name) . ". " . "My age is " . htmlentities($age) . ". " .
						 "I am " . htmlentities($sex);
				}
			?>

			
		</body>
	</html>
