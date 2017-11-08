<?php

require ("animals.php");

$tiger = new Animal;
var_dump($tiger);

$tiger->skinColor = "Purple";
var_dump($tiger);
echo "<br>Boja: $tiger->skinColor";

$tiger->speak();

$tiger->numberOfLimbs = 5;