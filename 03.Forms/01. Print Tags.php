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

			for($i=0; $i< count($inputArr); $i++) {
				echo $i . ':'. $inputArr[$i] . '<br />';
				
			}


		}

		
		

?>