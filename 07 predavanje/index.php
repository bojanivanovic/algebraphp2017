<?php

require("readData.php");
require("printData.php");

$studentsDataArray = readStudentsData(); // Dohvat podataka o studentima iz txt datoteke
$classesArray = readClassesData(); // Dohvat podataka o kolegijima iz txt datoteke

//var_dump($classesArray); // da vidimo kako izgledati asocijativno polje

printAllData($studentsDataArray, $classesArray);