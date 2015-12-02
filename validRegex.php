<?php

function checkRegex1($user) {
    
    $subject= $user;
    $pattern='/^[a-zA-Z0-9_]+$/';
    
    $result = preg_match($pattern, $subject);
    
    return $result;
}


function checkRegex2($password) {

    $subject= $password;
    $pattern = '/^[a-zA-Z0-9_]+$/';

    $result = preg_match($pattern, $subject);

    return $result;
}





//un sujet à la fois, $user et $ password vérifié en 2 temps
//peut être fait fait avec $_POST ['user']