<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />

	</head>
	<body>
		<form method="POST">
			<textarea style="width: 500px;resize: none;" name='useri'>
				
			</textarea>
			<input type="submit" name="submit" value="word count" />
		</form>
	</body>
</html>


<?php 
	if (isset($_POST['submit'])) {
		if(!empty($_POST['useri'])) {
			echo "<table border=\"1\" >";
			$split = preg_split('/\W+/', $_POST["useri"], 0, PREG_SPLIT_NO_EMPTY);
        	$count = array_count_values($split);
			foreach ($count as $key => $value) {
				echo "<tr><td>$key</td><td>$value</td></tr>";
			}
			echo "</table>";

		}	

	}

?>