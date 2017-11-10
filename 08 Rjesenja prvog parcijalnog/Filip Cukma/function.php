<?php

function date_trans($inputDate) {
	$line1 = strpos($inputDate, "-");
	$year = substr($inputDate, 0, $line1);
	
	$line2 = strpos($inputDate, "-", $line1 + 1);
	$month = substr($inputDate, $line1 + 1, $line2 - $line1 -1);
	
	$day = substr($inputDate, $line2 + 1);
	
	$finalDate = $day . "." . $month . "." . $year . ".";
	
	return $finalDate;
}
