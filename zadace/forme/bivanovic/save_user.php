<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$username = $_POST['username'];
$phone = $_POST['mobile-phone'];
$email = $_POST['email'];
$dateOfBirth = $_POST['dob'];


echo 'Saving to database...<br /><br />';
echo $firstName;
echo '<br />';
echo $lastName;
echo '<br />';
echo $username;
echo '<br />';
echo $phone;
echo '<br />';
echo $email;
echo '<br />';
echo $dateOfBirth;
echo '<br />';