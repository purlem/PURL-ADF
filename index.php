<?php
//to be placed in your Purlem landign page (index.php file). 

if($_GET['page'] == 100) {
    require_once('purl-adf.php');
 
    $to      = 'your@email.com';
    $subject = 'PURL Lead';
    $message = composeADF($visitor, $subject);
    $headers = 'From: from@email.com';
 
    mail($to, $subject, $message, $headers);
}