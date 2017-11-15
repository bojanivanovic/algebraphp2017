<?php

require_once ("humanMale.php");
require_once ("humanFemale.php");

// Primjer kreiranja objekta iz klase HumanMale
// $male = new HumanMale();
$female = new HumanFemale(); //  Kreiramo objekt iz klase HumanFemale()

// var_dump($male);

echo "<br><br>";
var_dump($female);

echo "<br><br>";
// $human = new Human(); // Human je abstraktna klasa pa ce se dogoditi greska
// var_dump($human);

echo "<br><br>";
$pero = new HumanMale(100,200); // Kreiramo objekt iz klase HumanMale pomocu naseg konstruktora ali navodimo 2 od 3 parametra
var_dump($pero);

echo "<br><br>";
$marko = new HumanMale(100,200,"zelene"); // Kreiramo objekt iz klase HumanMale pomocu naseg konstruktora
var_dump($marko);