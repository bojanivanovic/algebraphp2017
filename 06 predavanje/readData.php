<?php

/**
 * Function retuns all students data red from students.txt file
 */
function readStudentsData() {
	if (!file_exists("students.txt")) { //  Provjera postoji li datoteka
		die("students.txt ne postoji!");
	}
	
	//$studentsRawData = file_get_contents("students.txt");
	//"1;Sasa;Fajkovic;1,2 2;Pero;Peric;3 3;Ana;Anic;4 4;Iv;Pero-Todoric;4,2"
	$studentsData = []; // Polje u koje spremamo podatke o studentima
	
	$handle = fopen("students.txt", "r"); // kreiramo konekciju na datoteku
    while (($line = fgets($handle)) !== false) { // petlja se izvrsava dok god ima novu liniju u txt datoteci za procitati
        $line = trim($line); // tim funkcija uklanja suvisne razmake na pocetku i kraju teksta.
		
		// id studenta
		$firstPosition = strpos($line, ";"); // pozicija ; simbola
		$id = substr($line, 0, $firstPosition);
		
		// ime
		$secondPosition = strpos($line, ";", $firstPosition + 1); // pozicija ; simbola
		$firstName = substr($line, $firstPosition+1, $secondPosition - $firstPosition - 1);
		
		// prezime
		$firstPosition = $secondPosition;
		$secondPosition = strpos($line, ";", $firstPosition + 1);
		$lastName = substr($line, $firstPosition + 1, $secondPosition - $firstPosition - 1);
		
		// kolegiji
		$allClasses = substr($line, $secondPosition+1); // lista kolegija ali kao tekst
		$classesArray = explode(",",$allClasses); // lista kolegija kao polje elemenata
		
		$studentsData[] = [$id, $firstName, $lastName, $classesArray];
    }
    fclose($handle); // Zatvaramo konekciju s datotekom
	
	return $studentsData;
}

/**
 * Function returns data from classes.txt file
 */
function readClassesData() {
	if (!file_exists("classes.txt")) { // Provjera postoji li datoteka
		die("classes.txt ne postoji!");
	}
	
	//1;Programiranje PHP;5
	$classesArray = array();
	
	$handle = fopen("classes.txt", "r");
    while (($line = fgets($handle)) !== false) {
        $line = trim($line);
		
		// id 
		$firstPosition = strpos($line, ";");
		$id = substr($line, 0, $firstPosition);
		
		//naziv predmeta
		$secondPosition = strpos($line, ";", $firstPosition + 1);
		$className = substr($line, $firstPosition + 1, $secondPosition - $firstPosition - 1);
		
		//ECTS predmeta
		$ects = substr($line, $secondPosition + 1);

		// Dodajemo u asocijativno polje
		$classesArray[$id] = [$className, $ects];

	}
	fclose($handle); // Zatvaramo konekciju s datotekom
	return $classesArray;
}