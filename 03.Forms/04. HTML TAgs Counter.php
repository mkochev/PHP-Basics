<?php 
	echo "<form method='POST'> " . 
		 "<label for='tag'> Tags </label> " . 
		 "<input type='text' name='tagerino' />" . 
		 "<input type='submit' name='submit' />" .
		 "</form>";


		 session_start();
		 $tags = array('a' , 'b', 'c' , 'd' );

		 if (!isset($_SESSION['counter'])) {
		 	$_SESSION['counter'] = 0;
		 	
		 	

		 }

		 if (isset($_POST['submit']) && isset($_POST['tagerino'])) {
		 	$tag = mb_strtolower(trim($_POST['tagerino']));

		 	if (array_search($tag, $tags) === false) {
		 		echo "<p> Invalid tag! </p>";
		 	}

		 	else {
		 			echo "<p> Valid tag! </p>";
		 		if (array_search($tag, $tags) !== false) {
		 			
		 				$_SESSION['counter']++;
		 	 
		 			
		 		}
		 	}

		 	echo "<p> Score:" . $_SESSION['counter'] . "</p>";
		 	
		 }

		 
	
?>