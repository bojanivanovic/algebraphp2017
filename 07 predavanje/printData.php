<?php

function printStudentData($studentData) {
	echo "<h3>$studentData[1] $studentData[2]</h3>";
}

function printClassData($classData) {
	echo "<p>$classData[0] ects:$classData[1]</p>";
}

function printAllData($studentsList, $classesList) {
	for ($i = 0; $i < count($studentsList); $i++) {
		printStudentData($studentsList[$i]);
		for ($j = 0; $j<count($studentsList[$i][3]); $j++) {
			$classId = $studentsList[$i][3][$j];
			$classData = $classesList[$classId];
			printClassData($classData);
		}
	}
}

