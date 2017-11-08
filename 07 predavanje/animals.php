<?php

class Animal { // Kreiramo klasu Anima
	public $skinColor; // property koji ima public pravo pristupa
	private $numberOfLimbs; // property koji ima private pravo pristupa
	public $numberOfEyes; // property koji ima public pravo pristupa
	public $sex; // property koji ima public pravo pristupa
	
	// Metoda koju cemo koristiti nad objektima klase Anima
	function speak() {
		echo "I'm a speaking animal";
	}
}