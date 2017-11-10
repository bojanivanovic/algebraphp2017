<!DOCTYPE html>
<html>

<head>
<title>Ucenici</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Lista ucenika</h1>
<table>
<tr>
<th>Rbr.</th>
<th>Prezime:</th>
<th>Ime:</th>
<th>Datum prijave</th>
<th>Placeno</th>
</tr>
<?php

include ("data.php");

if(!file_exists("data.php")){
	die ("File not found");
}
function date_trans($date){
	$rawDateArray=explode("-",$date);
	echo "$rawDateArray[2].$rawDateArray[1].$rawDateArray[0]";
}



for($i=1;$i<=count($data);$i++){
	echo "<tr>";
	
	echo "<td>$i.</td>";
	
	echo "<td>";
	echo $data[$i]["prezime"];
	echo "</td>";
	
	echo "<td>";
	echo $data[$i]["ime"];
	echo "</td>";
	
	echo "<td>";
	date_trans($data[$i]["datum"]);
	echo "</td>";
	
	echo "<td>";
	echo "<select>";
	echo "<option selected>";
	echo $data[$i]["placeno"];
	if($data[$i]["placeno"] == "Da"){
		echo "<option>Ne</option>";
	}
	else{
		echo "<option>Da</option>";
	}
	echo "</select>";
	echo "</td>";
	
	
	echo "</tr>";
}



?>
</table>
<img src="https://image.flaticon.com/icons/png/128/603/603172.png"/>
</body>
</html>