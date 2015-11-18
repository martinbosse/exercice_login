<?php 

require_once 'frontHomeLogin.php';
require_once 'backOpenSession.php';
require_once 'backCloseSession.php';
require_once 'backCheckLogin.php';

manageLogin();

function manageLogin() {
    
    $user = (string) $_POST["username"];
    $password = (string) $_POST["password"];
    
    if (checkLogin($user, $password)) {
        
        createSession();
        
        if (checkCookie()) {
            header ("Location: frontLogin1.php");
        }
        
        else {
            closeSession();
        }
    }
    
    else {
        echo 'Username and/or password incorrect. Please try again.';
    }
}
 ?>