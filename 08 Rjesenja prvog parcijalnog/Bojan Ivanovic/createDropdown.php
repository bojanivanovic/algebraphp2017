<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function createDropdown($value) {
    
    $dropdown = '<select>';
    $dropdown .= '<option';
    $value == 'Da' ?  $dropdown .= ' selected="selected">' : $dropdown .= '>';
    $dropdown .= 'Da';
    $dropdown .= '</option>';
    $dropdown .= '<option';
    $value == 'Ne' ?  $dropdown .= ' selected="selected">' : $dropdown .= '>';
    $dropdown .= 'Ne';
    $dropdown .= '</option>';
    $dropdown .= '</select>';
    
    return $dropdown;
    
    /*echo '<select>';
    
    echo '<option';
    
    echo ($value == 'Da' ? ' selected="selected">' : '>');
    
    echo 'Da';
    echo '</option>';
    
    echo '<option';
    
    echo ($value == 'Ne' ? ' selected="selected">' : '>');
    
    echo 'Ne';
    echo '</option>';
    
    echo '</select>';*/
}