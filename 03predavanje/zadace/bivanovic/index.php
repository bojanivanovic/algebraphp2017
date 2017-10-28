<?php

	echo '<h3>Multiplication table</h3>';

	echo '<table>';

	for($i = 0; $i <= 10; $i++) {
		echo '<tr>';
		for($j = 0; $j <= 10; $j++) {
			echo '<td>' . $i . ' * ' . $j . ' = ' . $i * $j . '</td>';
		}

		echo '</tr>';
	}
	echo '</table>';

	echo '<h3></h3>'

?>
