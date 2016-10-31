<?php
function infoTable($name, $phone, $age, $address) {
	echo '<body>' . '<main>'.
		 '<table style="border: 2px solid black; margin:0; width: 350px;">' .
		 '<tr>' .
		 '<td style="background-color: gray; text-align:center">' . "Name" . '</td>' . '<td style="text-align:center">' . $name . '</td>' . 
		 '</tr>' .
		 '<tr>' .
		 '<td style="background-color: gray; text-align:center">' . "Phone" . '</td>' . '<td style="text-align:center">' . $phone . '</td>' . 
		 '</tr>' .
		 '<tr>' .
		 '<td style="background-color: gray; text-align:center">' . "Age" . '</td>' . '<td style="text-align:center">' . $age . '</td>' . 
		 '</tr>' .
		 '<tr>' .
		 '<td style="background-color: gray; text-align:center">' . "Address" . '</td>' . '<td style="text-align:center">' . $address . '</td>' . 
		 '</tr>' .
		 '</table>' .
		 '</body>' . '</main>';
	}
echo infoTable("Who", 123 , 123 , " Here " );
?>