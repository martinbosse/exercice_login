<?php

include 'checkLogin.php';

$test = checkLogin('andrewcaya', 'password3');
$firstname = getFirstname('christianpineault');

var_dump($test, $firstname);