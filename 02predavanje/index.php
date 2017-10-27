<?php


$x = 5; // Kreiramo varijablu i dodijelimo joj vrijednost 5
$x = $x * 2; // Vrijednost varijable $x uvecavamo dva puta
echo $x * 3; // Ispisujemo koliko je vrijednost varijable pomnozeno s 3 (ali pritom vrijednost $x varijable ostaje nepromijenjena)
echo "<br>"; // prijelaz u novi red.
echo $x; // Ispisujemo vrijednost varijable x da vidimo da je ostala nepromijenjena nakon prosle linije

$ime = "sasa"; // Kreiramo jos jednu varijablu
echo $ime; // Ispis druge varijable
echo "$ime + 3"; // Ispis varijable ali se varijabla i druga numericka vrijednost nalaze pod dvostrukim navodnicima

echo "<br>";
echo "IF vjezbanje" . "<br>";
// Kontrola toka koristenjem IF
if ($x < 10) {
  echo "manje od 10";
} else if ($x == 10) {
  echo "Tocno 10";
} else {
  echo "vece od 10";
}

echo "<br> <br>";

$niz1 = array(1,2,array("a","b")); // Kreiranje niza/polja na jedan nacin
$niz2 = [1,2,3]; // Kreiranje niza/polja na drugi nacin
// Kreiranje kompleksnog polja koje unutar sebe ima razlicite tipove podatka izmedu
// ostalog ima i drugo polje koje unutar sebe ima 2 broja (1, 2) i jos jedno 
// polje koje unutar sebe ima 2 broja
$niz = [1,2,["a","b"],[1,2,[4,1]]]; 

echo "<br> var_dump() citanje vrijednosti polja <br>";
var_dump($niz[$niz[3][2][1]]); // var_dump() jedne vrijednosti koju citamo iz varijable $niz koja je polje
echo "<br> <br>";

echo "var_dump(niz) <br>";
var_dump($niz); // var_dump() cijelog polja
echo "<br> <br>";

// rad s decimalnim brojevima
$f = 2.123 + 2;
echo $f;

$polje2 = ["a","n"];
$polje2[] = "j"; // dodjeljujemo nizu elemenata jos jedan element

echo "<br> var_dump(polje2) <br>";
var_dump($polje2);
echo "<br> <br>";

for ($i = 0; $i > 10; $i++) { // primjer for petlje koja se nece izvesti niti jednom
    echo $i;
} // Ovdje smo imali i primjer beskonacne petlje kada primjerice uklonimo povecanje varijable $i

$i = 0;
echo "<br> While petlja <br>";
while ($i < 10) { // primjer while petlje
  echo "a";
  $i++;
}
echo "<br> <br> ispis varijable i <br>";

echo $i;
echo "<br> <br> Do while petlja <br>";
do {
  echo "b";
  $i++;
} while ($i < 5); 

/*
  ZADATAK - ISPISATI SVE PARNE BROJEVE OD 0 DO 100 
  *Dodatno - prikazati po 5 brojeva u redu
*/
echo "<p>ZADATAK</p>";

$numbersInRow = 0; // varijabla koja ce oznacavati koliko je trenutno brojeva ispisano u jednom redu.
for ($i = 0; $i < 100; $i++) {
  if ($i % 2 == 0 ) { // modulo operacija = ostarak pri cijelobrojnom dijeljenju
  echo $i . " , ";
  $numbersInRow++; //  Ako dolazi do prikaza broja onda zelimo i povecati vrijednost varijable koja prikazuje koliko smo brojeva do sada ispisali u tom redu.
  if ($numbersInRow == 5) {
    echo "<br>"; // prijedemo u novi red
    $numbersInRow = 0; // i resetiramo brojac na nulu
    }
  }
}

echo "<br> <br> Prikaz neispravnog rjesenja <br>";
// Demonstracija zasto ne mozemo koristiti cisto dijeljenje
for ($i = 0; $i < 100; $i++) {
  if ($i / 2 == 0) {
  echo $i . " ";
  }
}