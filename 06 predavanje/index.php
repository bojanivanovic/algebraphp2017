<?php

require("readData.php");

$studentsDataArray = readStudentsData(); // Dohvat podataka o studentima iz txt datoteke
$classesArray = readClassesData(); // Dohvat podataka o kolegijima iz txt datoteke

var_dump($classesArray); // da vidimo kako izgledati asocijativno polje

$test = $classesArray["1"]; // Dohvacamo vrijednost po kljucu, a ne po indeksu
echo "Naziv predmeta: " . $test[0] . "<br>";
echo "ects: " . $test[1];
