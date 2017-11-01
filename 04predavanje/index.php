<?php
// Ukljucujemo drugu PHP datoteku
include 'data.php';

// Funkcija ce pretvarati datum u formatu DD.MM.YYYY u format YYYY-MM-DD
function convertDate($inputDate) {
// Primjeri datuma koji nam mogu uci u funkciju
//31.10.2017 1.17.2017 30.2.2017 1.2.2017
//2017-10-31

$dot1 = strpos($inputDate, "."); // Nademo poziciju prve tocke u datumu
$date = substr($inputDate, 0, $dot1); // Nademo samo dan iz ulaznog datuma
$dot2 = strpos($inputDate, ".", $dot1+1); // Nademo lokaciju druge tocke u ulaznom datumu
$month = substr($inputDate, $dot1+1, $dot2-$dot1-1); // Nademo mjesec iz ulaznog datuma
$year = substr ($inputDate, $dot2+1); // Nademo godinu iz ulaznog datuma
$finalDate = $year . "-" . $month . "-" . $date; // Kreiramo finalnu (konvertiranu) verziju datuma
return $finalDate; // Vracamo novi format datuma kao rezultat funkcije
}

// Kreiramo funkciju koja ce kao zbrajati dva broja ali zapravo nece jer jer ce prva varijabla uvijek biti 0
// Ovdje nam je cilj ukazati na prijenos po vrijednosti i prijenost po referenci (ako stavimo simbol & ispred
// naziva parametra, ona se koristi prijenos po referenci. Primjer vidimo kod parametra num1.
function sumNumbers(&$num1, $num2) {
$num1 = 0; // Mucko djubre 
return $num1 + $num2; // Vracamo rezultat zbroja dvije varijable
}

// Ovdje nam je cilj bio kreirati tablicu koja ispisuje podatke iz datoteke data.php

echo "<table>";
echo "<tr>";

echo "<th>";
echo "First name";
echo "</th>";

echo "<th>";
echo "Last name";
echo "</th>";

echo "<th>";
echo "Allowed";
echo "</th>";

echo "</tr>";

// Ovdje smo se prvi puta upoznali s foreach petljom
// $value za svaku iteraciju predstavlja drugu vrijednost iz $data polja koje se nalazi unutar data.php datoteke.
foreach ($data as $value) {
echo "<tr>";
echo "<td>";
echo $value[0];
echo "</td>";
echo "<td>";
echo $value[1];
echo "</td>";
echo "<td>";
echo "<select>";
// Primjer 'skracenog' IFa
//echo $value[2] > 18 ? "<option selected = 'selected'>" : "<option>";

// Ako osoba ima vise od 18 godina inicijalno u padajucem izborniku stavljamo da smije uci u kafic
if ($value[2] > 18) {
echo "<option selected = 'selected'>";
} else {
echo "<option>";
}
echo "Da";
echo "</option>";

// Ako osoba ima manje od 18 godina inicijalno postavimo da ne smije uci u kafic
// Ali imamo padajuci izbornik jer maloljetnoj osobi mozemo odobriti ulaz uz prisutnost roditelja primjerice.
if ($value[2] < 18) {
echo "<option selected = 'selected'>";
} else {
echo "<option>";
}
echo "Ne";
echo "</option>";
echo "</select>";
echo "</td>";
echo "</tr>";
}

echo "</table>";

// Size of funkcija govori koliko ima elementa u polju
echo "Velicina polja: " . sizeof($data);
$data = null; // Upoznali smo null vrijednost
var_dump($data);
echo "Velicina polja: " . sizeof($data);

echo "<br>";

$datum = convertDate("31.10.2017"); // Pozivamo funkciju za konverziju formata datuma
echo $datum;
echo "<br>";

$br1 = 2;
$br2 = 3;
echo sumNumbers($br1, $br2); // pozivamo funkciju za zbrajanje dva broja
// Kada smo dodali da sumNumbers() prima prvi parametar po referenci onda smo ponovno ispisali vrijednost varijable
// $br1 kako bi vidjeli da je zaista doslo do promjene njezine vrijednosti.
echo "br1: " . $br1;
