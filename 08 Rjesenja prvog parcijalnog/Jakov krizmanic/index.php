<?php

include("data.php");

echo "<table border = '1'>
		<caption> Podaci o studentima </caption>
		<tr>
		<th> Rbr </th>
		<th> Prezime </th>
		<th> Ime </th>
		<th> Datum prijave </th>
		<th> Placeno </th>
		</tr>";
		
		foreach($data as $podaci)
		{
			$Rbr = $Rbr + 1;
			echo "<tr>
			<td>" . $Rbr . "</td>
			<td>" . $podaci["ime"] . "</td>
			<td>" . $podaci["prezime"] . "</td>
			<td>" . $podaci["datum"] . "</td>
			<td>" . $podaci["placeno"] . "</td>
			</tr>";
		}
		
		echo "</table>";
		
		
		
		
		