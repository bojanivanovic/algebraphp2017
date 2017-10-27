<?php

// Ispis neparnih brojeva koristenjem petlje i continue naredbe
echo "Ispis neparnih brojeva koristenjem petlje i continue naredbe <br>";
$i = 0;
while ($i < 100) {
  $i++;
  if ($i%2==0) {
    continue;
}
  echo $i . " ";
}

echo "<br> <br>";


echo "<br> Mjenjacnica zadatak <br>";

$tecajUSD = 7.0;
$tecajEuro = 7.5;

$apoeni = [1,2,5,10,20,50,100,200,500];

echo "<p> Valuta euro </p>";
for ($i = 0; $i < 9; $i++) {
echo $i+1 .". " .$apoeni[$i] . " Euro = " . $apoeni[$i] * $tecajEuro . " <br>";
}

echo "<p> Valuta americki dolari </p>";
for ($i = 0; $i < 9; $i++) {
echo $i+1 .". " .$apoeni[$i] . " Dolar = " . $apoeni[$i] * $tecajUSD . " <br>";
}

echo "<br> <br> Zadatak 2 <br>";
/* Zadatak iz dva polja napraviti umnozak po jednakim indeksima */
$polje1 = [1,2,5,10,20];
$polje2 = [10,20,30,40,50];

for ($i = 0; $i < 5; $i++) {
  echo $polje1[$i] * $polje2[$i] . "<br>"; 
}

echo "<br> <br> Zadatak 3";
/* Zadatak upgrade - svaki broj iz prvog polja pomnoziti sa svakim brojem iz drugog polja */

for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    $umnozak = $polje1[$i] * $polje2[$j];
    echo $polje1[$i] . " * " . $polje2[$j] . " = " . $umnozak . "<br>";
  }
}

echo "<br> <br>";

echo "<br> podsjetnik kako radi var_dump() ovisno o tipu varijable <br>";

var_dump($polje1);
echo "<br>";

$test = "abc";
var_dump($test);
echo "<br>";

$test2 = "2";
var_dump($test2);
echo "<br>";

$test3 = 2;
var_dump($test3);

$pero = [1,2,3];
echo $pero[10];