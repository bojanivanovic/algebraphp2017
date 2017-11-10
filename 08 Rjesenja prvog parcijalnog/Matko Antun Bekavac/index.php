<!DOCTYPE>

<html>
<head>
<?php include 'data.php';?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>

<table>
	<thead>
		<tr>
			<th>Rbr</th>
			<th>Prezime</th>
			<th>Ime</th>
			<th>Datum prijave</th>
			<th>Plaćeno</th>
		</tr>
	</thead>
  
    <tbody>
  
      <?php foreach ($data as $row=>$value): ?>
	    <tr>
	    	<td><?php echo $row.".";?></td>
			<td><?php echo $data[$row]["prezime"];?></td>
			<td><?php echo $data[$row]["ime"];?></td>
			<td><?php echo $data[$row]["datum"];?></td>
			<td>
				<select>
					<option><?php 
					if($data[$row]["placeno"]=='Da')
					echo "Da";
					else echo "Ne";
					?></option>
					
					<option><?php 
					if($data[$row]["placeno"]=='Da')
					echo "Ne";
					else echo "Da";
					?></option>
				
				</select>
			</td>
			
		</tr>
	  <?php endforeach; ?>
	
	</tbody>
  
</table>


</body>

</html>

