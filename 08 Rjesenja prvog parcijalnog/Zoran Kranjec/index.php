<?php

include 'data.php'; 

echo "<table>";
echo "<tr>";

echo "<th>";
echo "Rbr";
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

function date_trans($inDate) {
	$polja = explode("-", $inDate);
	
	return $polja[2] . "." . $polja[1] . "." . $polja[0];
}

foreach($data as $index=>$value) {
echo "<tr>";

	echo "<td>";
	echo $index . ".";
	echo "</td>";
	

	echo "<td>";
	echo $value["prezime"];
	echo "</td>";

	echo "<td>";
	echo $value["ime"];
	echo "</td>";

	echo "<td>";
	echo date_trans($value["datum"]);
	echo "</td>";
	
	echo "<td>";
	echo "<select>";
	if ($value["placeno"] == "Da") {
		echo "<option selected>Da</option>";
		echo "<option>Ne</option>";
	} else {
		echo "<option>Da</option>";
		echo "<option selected>Ne</option>";
	}
	echo "</td>";
	
	echo "</tr>";
}

echo "</table>";

		
	
