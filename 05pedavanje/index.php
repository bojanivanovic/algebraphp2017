<?php

require "functions.php";

echo "Fibonacci: <br>";
echo createFibonacci(10);

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

if (file_exists("data.txt")) {
	echo "File data.txt found";
} else {
	die("File data.txt NOT FOUND!!!");
}

$dataFromTxt = file_get_contents("data.txt");
echo "<br> Data from txt file: <br>";
echo $dataFromTxt;

file_put_contents("pero.txt","Ovo je prva recenica");
echo "Gotov s upisom";

file_put_contents("pero.txt","Ovo je druga recenica",FILE_APPEND);

