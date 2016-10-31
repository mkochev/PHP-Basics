<?php 
function InfoTable($name,$phoneNum,$age,$addr) {
	echo '<body>' . '<main>'. 
		 '<table style="border: 5px solid green;margin: 0; spacing:0 border: 1px solid black; width:350px; height:250px;cell-spacing:0;border-spacing:0;">' . 
		 '<tr style="">' .
		 '<td style="background-color:gray;text-align:center">' . "Name". '</td>' .  '<td style="text-align:center">'.  $name .' </td>' . 
		 '</tr>' .
		 '<tr style="border:1px solid black;">' .
		 '<td style="background-color:gray;text-align:center">' . "Phone Number" . '<td style="text-align:center">'. $phoneNum.  '</td>' . 
		 '</tr>' . 
		  '<tr style="border:1px solid black;">' .
		 '<td style="background-color:gray;text-align:center">' . "Age" .'<td style="text-align:center">'. $age .'</td>' . 
		 '</tr>' .
		  '<tr style="border:1px solid black;">' .
		 '<td style="background-color:gray;text-align:center">' . "Address" .'<td style="text-align:center">'. $addr .'</td>' . 
		 '</tr>' .
		 '</table>' . 
		 '</main>' . '</body>' . 
		 '<br />';
}


InfoTable("Martin",123,12,"Somewhere over the rainbow");
InfoTable("LASDLASD",123,1123123,"Somewhere over the rainbow");
?>