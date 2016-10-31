<?php
		$now = getdate();
		$newYear = mktime(0, 0, 0, 1, 1, $now['year']+ 1);

		$diff = $newYear - $now[0];

		if (date("I", $now[0]) > 0) {
			$diff -= 3600;
		}

		echo "Hours until new year : " . round($diff/3600) . "<br/>";
		echo "Minutes until new year :" . round($diff/60). "<br />";
		echo "Seconds until new year :" . round($diff) . "<br/>";
		echo "Days:Hours:Minutes:Seconds " . round($diff / 86400) . ":" . date("H:i:s", $now[0]);
		
?>
