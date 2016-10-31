<!doctype HTML>
<html>
	<head> 
		<meta charset="UTF-8" />
		<title>
			Sent Extractor
		</title>
		<style>
		 textarea {
		 	resize: none;
		 	width: 250px;
		 	height: 100px;
		 }
		 input { 
		 	margin-left: 10px;
		  }
		</style>
	</head>

	<body>
		<form method="POST">
		  <textarea name="sentences" rows="4"  cols="50" placeholder="Type your text in here..."></textarea>
		  <input type="text" name="word" />
		  <input type="submit" name="submit" value="search" />

		</form>
	</body>

</html>

<?php

	if (isset($_POST['sentences']) && isset($_POST['word'])) {
		$text = $_POST['sentences'];
		$search = $_POST['word'];
		$pattern = "/\\b[^.!?]*\\b" . $search . "\\b[^.!?]*[?!.]/";
		preg_match_all($pattern, $text, $matches);
		
		if (isset($_POST['submit'])) {
			if (count($matches) >0 ) {
				foreach($matches[0] as $blah) {
					echo htmlentities($blah);
				}

			}
			else {
				echo " No Matches Found";
			}
		}

	}

?>