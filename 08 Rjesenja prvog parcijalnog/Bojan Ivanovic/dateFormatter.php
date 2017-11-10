<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dateFormatter($date) {
    $dateParts = explode('-', $date);
    
    return $dateParts[2] . '.' . $dateParts[1] . '.' . $dateParts[0] . '.';
}