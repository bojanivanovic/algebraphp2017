<?php

include "data.php";



echo "<table>";
echo    "<tr>" ;
echo 		"<th>Rbr.</th>";
echo		"<th>Prezime</th>";
echo		"<th>Ime</th>";
echo		"<th>Datum prijave</th>";	
echo 		"<th>Placeno</th>";
echo    "</tr>";




foreach ($data as "prezime"){
	
	echo "<tr>";
	echo "<td>";
	echo $data[1];
	echo "</td>";
}
	
	echo "<tr>";
	echo "<td>";
	echo $data[$i]["ime"];
	echo "</td>";
	
	echo "<tr>";
	echo "<td>";
	echo $data[$i]["Datum prijave"];
	echo "</td>";
	
	echo "<tr>";
	echo "<td>";
	echo $data[$i]["Placeno"];
	echo "</td>"; 
	
	echo "<tr>";
	echo "<td>";
	echo $data[$i]["ime"];
	echo "</td>";
	
	echo "</table>";
}

















?>