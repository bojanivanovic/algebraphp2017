<?php

require "data.php";
require "function.php";

echo "<table>";
echo "<tr>";

echo "<th>";
echo "Rbr";
echo "</th>";

echo "<th>";
echo "Last name";
echo "</th>";

echo "<th>";
echo "First name";
echo "</th>";

echo "<th>";
echo "Datum prijave";
echo "</th>";

echo "<th>";
echo "Placeno";
echo "</th>";

echo "</tr>";

foreach ($data as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo ".";
	echo "</td>";
	
	echo "<td>";
	echo "$key[2] $value[prezime]<br>";
	echo "</td>";
	
	echo "<td>";
    echo "$key[1] $value[ime]<br>";
	echo "</td>";
	
	echo "<td>";
	echo date_trans($value["datum"]);
	echo "</td>";
	
	echo "<td>";
	echo "<select>";
	
	if ($value[placeno] == "Ne") {
		echo "<option selected = 'selected'>";
	}
		else { echo "<option>";
	}
		echo "Ne";
		echo "</option>";
		if ($value[placeno] == "Da") {
		echo "<option selected = 'selected'>";
	}
		else { echo "<option>";
	}
		echo "Da";
		echo "</option>";
	echo "</td>";
}

