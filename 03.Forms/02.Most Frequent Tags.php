<?php
	echo "<p> Enter Tags </p>" . "<br/>" .
		 "<form method='post'>" .
		 "<input type='text' name='tags' />" .
		 "<input type='submit' value='Submit' name='submit' />" .
		 "</form>";

		if(isset($_POST['tags'])) {
			$inputText =  htmlentities($_POST['tags']);
			$inputArr = explode(',', $inputText);
			$inputArr = array_map('trim', $inputArr);

			$count = array_count_values($inputArr);
			arsort($count);
			$keys = array_keys($count);

			foreach($count as $tag => $value) {
				echo $tag. ":" . $value . ' times <br/>' ;
			}

			echo "Most frequent tag is " .  $keys[0];

		}

		
		

?>