<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'data.php';
require_once 'dateFormatter.php';
require_once 'createDropdown.php';

// html base
echo '<!DOCTYPE html><html><head><title>Partial exam 01</title></head>'
. '<body>';

// table structure
echo '<table>';
echo '<tr>';
echo '<th>' . 'Rbr.' . '</th>';
echo '<th>' . 'Prezime' . '</th>';
echo '<th>' . 'Ime' . '</th>';
echo '<th>' . 'Datum prijave.' . '</th>';
echo '<th>' . 'Placeno' . '</th>';
echo '</tr>';

for ($i = 1; $i <= sizeof($data); $i++) {
    echo '<tr>';
    echo '<td>' . $i . '.' . '</td>';
    echo '<td>' . $data[$i]['prezime'] . '</td>';
    echo '<td>' . $data[$i]['ime'] . '</td>';
    echo '<td>' . dateFormatter($data[$i]['datum']) . '</td>';
    echo '<td>' . createDropdown($data[$i]['placeno']) . '</td>';
    echo '</tr>';
}

echo '</table>';

// html end
echo '</body></html>';
    