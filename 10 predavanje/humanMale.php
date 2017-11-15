<?php

require_once("human.php");

class HumanMale extends Human { // Klasa HumanMale nasljeduje Human klasu
	
	public function __construct($tezina, $visina, $bojaOcija = "crna") { // treci parametar je opcionalan
		$this->weight = $tezina; // property wight dolazi iz roditeljske klase Human i vrijednost postavimo na vrijednost koja je usla kao prvi parametar u konstruktor
		$this->height = $visina; // isto kao i prvi parametar samo ovdje upisujemo drugi parametar
		$this->eyeColor = $bojaOcija; // kao i prva dva, samo je $bojaOciju opcionalan parametar. Ako se ne navede ova vrijednost, svaki objekt ove klase ce imati crnu boju ociju
	}
}