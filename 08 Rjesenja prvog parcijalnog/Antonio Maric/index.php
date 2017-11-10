<!DOCTYPE html>
<html>

<?php
include "data.php";

function data_trans($inputDate){
    echo"<br>";
    $dot1 = strpos($inputDate, ".");
    $date = substr($inputDate, 0, $dot1 );
    $dot2 = strpos($inputDate, ".", $dot1+1);
    $month = substr($inputDate, $dot1+1, $dot2-$dot1-1);
    $year = substr($inputDate, $dot2+1);

    $finalDate = explode("-", $inputdate);

    return $finalDate;
}



echo "<table>";
echo "<tr>";

echo "<th>";
echo "Rbr. -";
echo "</th>";



echo "<th>";
echo "Prezime -";
echo "</th>";

echo "<th>";
echo "Ime -";
echo "</th>";

echo "<th>";
echo "Datum prijave -";
echo "</th>";

echo "<th>";
echo "Placeno";
echo "</th>";

echo "</tr>";



?>

</html>