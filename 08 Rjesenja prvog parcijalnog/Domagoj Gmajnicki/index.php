<?php

include"data.php";

//neznam kak pretvorit datum 

echo"<table>";

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
echo "placeno";
echo "</th>";


echo "</tr>";

foreach ($data as $key => $value) {
	echo"<tr>";
	echo"<td>";
	echo $key;
	echo ".";
	echo"</td>";
	
	echo"<td>";
	echo $value["ime"];
	echo"</td>";
	
	echo"<td>";                                                                         
	echo $value["prezime"];
	echo"</td>";
	
	echo"<td>";
	echo $value["datum"];
	echo"</td>";
	
	
	echo"<td>";
	echo"<select>";
	
	if($value ["placeno"] == "Da") {
	echo "<option selected = 'selected'>";
	} else {
	echo "<option>";
	}
	echo "Da";
	echo "</option>";
	
	if($value ["placeno"] == "Ne") {
	echo "<option selected = 'selected'>";
	} else {
	echo "<option>";
	}
	echo "Ne";
	echo "</option>";
	
	
	
	echo "</select>";
	echo "</td>";
	echo "</tr>";


}




echo"</table>";
