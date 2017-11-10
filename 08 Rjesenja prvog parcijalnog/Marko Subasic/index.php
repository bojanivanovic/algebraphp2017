<?php

include "data.php";

function convertDate($inputDate) {
	$dot1 = strpos($inputDate, ".");
	$date = substr($inputDate, 0, $dot1);
	$month = substr($inputDate, $dot1+1, $dot2-$dot1-1);
	$year = substr ($inputDate, $dot2+1); 
	$finalDate = $year . "-" . $month . "-" . $date;
	return $finalDate;
	}
echo "<table>";
echo "<tr>";

echo "<th>";
echo "Rbr.";
echo "</th>";

echo "<th>";
echo "Prezime";
echo "</th>";

echo "<th>";
echo "Ime";
echo "</th>";

echo "<th>";
echo "Datum prijave";
echo "</th>";

echo "<th>";
echo "Placeno";
echo "</th>";
echo "</tr>";

foreach ($data as $value) {
echo[$ime];
}

?>