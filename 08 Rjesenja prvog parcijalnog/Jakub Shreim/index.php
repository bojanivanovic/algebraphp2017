<?php


include 'data.php';

  
/*$length = count($data);
for ($i = 0; $i < $length; $i++) {
  echo $data[$i];
  echo "<br>";
}
	
*/

echo "<table>";
echo "<tr>";

echo "<th>";
echo "First name";
echo "</th>";

echo "<th>";
echo "Last name";
echo "</th>";

echo "<th>";
echo "Datum prijave";
echo "</th>";

echo "<th>";
echo "Placeno";
echo "</th>";

echo "</tr>";
echo "</table>";

/*
foreach ($data as $value) {
	
}
*/
	
	
	

function printStudentData($data){
	for ($i= 0; $i < count($data); $i++){
	 
	
	echo "<tr> <td>$data[$i]["ime"]</td> 
			   <td>$data[$i]["prezime"]</td> 
			   <td>$data[$i]["datum"]</td> 
			   <td>$data[$i]["placeno"]</p></td>
			   
		 </tr>";
	
}
return $data;
}
printStudentData($data);

























