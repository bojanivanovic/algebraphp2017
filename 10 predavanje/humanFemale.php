<?php

require_once("human.php");

class HumanFemale extends Human { // Nasljedivanje iz klase Human
	public $isWearingHighHeels = true; // property specifican samo za ovu (child) klasu

	public function __construct() { // konstruktor
		$this->sex = "F";
	}
	
}