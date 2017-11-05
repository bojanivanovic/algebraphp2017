<?php

require "functions.php"; // Zahtijevamo functions.php datoteku. Podsjetnik: Postoji razlika izmedu require i include.

echo "Fibonacci: <br>";
echo createFibonacci(10); // Pozivamo funkciju za generiranje brojeva po fibonaccijevom nizu.

// Primjer kako se radi s funkcijom koja prima parametar po referenci
$ref1 = "abc";
echo "<br>ref1: " . $ref1 . " before using function setVariableValueToNull() <br>";
setVariableValueToNull($ref1);
echo "ref1 after function execution: "; var_dump($ref1); echo "<br>";

// Primjer kako se radi s funkcijom koja prima parametar po vrijednosti
$val1 = "123456";
echo "<br>val1 before function execution: " . $val1 . "<br>";
changeVariableByValue($val1);
echo "<br>val1 after function execution: "; var_dump($val1); echo "<br>";

// pristup globalnoj varijabli
echo "<br> Global variable test <br>"; 

echo "<br> Rad s datotekom </br>";

// Funkcija file_exist() provjerava postoji li datoteka na zadanoj putanji.
if (file_exists("data.txt")) {
	// Ako datoteka postoji ispisujemo obavijest da je datoteka uspjesno pronadena
	echo "File data.txt found";
} else {
	// Ako datoteka ne postoji ispisujemo obavijest da datoteka nije pronadena
	die("File data.txt NOT FOUND!!!");
}

// Ucitavamo sadrzaj datoteke data.txt u varijablu $dataFromTxt
$dataFromTxt = file_get_contents("data.txt");
echo "<br> Data from txt file: <br>";
echo $dataFromTxt;

// Pomocu funkcije file_put_contents() upisujemo tekst u datoteku. U ovom slucaju ce se prethodni sadrzaj datoteke prepisati sadrzajem koji mi postavljamo
file_put_contents("pero.txt","Ovo je prva recenica");
echo "Gotov s upisom";

// U ovom slucaju radimo dodavanje teksta u istu datoteku kao u prethodnom pozivu funkcije file_put_contents() ali ovaj put necemo prebrisati
// prethodni sadrzaj datoteke nego dodajemo na vec postojeci.
file_put_contents("pero.txt","Ovo je druga recenica",FILE_APPEND);

$globVar = "This should not be available inside other functions";

// Function is created to demonstrate the ability to access the variable globVar which is created outside this function, and
// normaly we wouldn't be able to access this variable but thanks to the keyword global we can access it.
function globalScopeTest1() {
	global $globVar;
	echo "<br> globVar1 (inside globalScopeTest1): " . $globVar . "<br>";
}

// Testiramo pristup varijabli koja je kreirana van funkcije ali pomocu kljucne rijeci
// global joj i dalje mozemo pristupiti.
globalScopeTest1();
globalScopeTest2();

