<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$email = $_POST['email'];
$pass = $_POST['pass'];

if ($pass = '1234') {
    echo 'Welcome back ' . $email .'!';
}else{
    echo 'Wrong password! Please try again.';
}