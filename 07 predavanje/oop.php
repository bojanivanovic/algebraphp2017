<?php
// Uvod u objetkno orijentirano programmiranje.$_COOKIE

require ("animals.php"); // Iz ove datoteke cemo koristiti klasu Animal

$tiger = new Animal; // Kreiramo objekt (instancu) klase Anima
var_dump($tiger);

$tiger->skinColor = "Purple"; // Pridjeljujemo vrijednost propertyu objekta
var_dump($tiger);
echo "<br>Boja: $tiger->skinColor"; // ispis vrijednosti propertya objekta

$tiger->speak(); // pozivamo metodu nad objektom

$tiger->numberOfLimbs = 5; // pokusavamo raditi s propertyem koja ima private prao pristupa sto rezultira pogreskom