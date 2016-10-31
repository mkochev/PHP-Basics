<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
        
	        .red {
	            color: #ff0000;
	        }
	        .blue {
	            color: #0000ff;
	        }
    	</style>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="words" />
			<input type="submit" name="submit" value="color" />
		</form>
	</body>
</html>


<?php 
	if (isset($_POST['submit']) && !empty($_POST['words'])) {
		 $chars = $_POST['words'];
		
		foreach (str_split($chars) as $letter) {


			echo "<span class=\"" . (ord($letter) % 2 == 0 ? "red" : "blue") . "\">$letter</span> ";
			
		}
	}	


?>