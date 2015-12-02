<?php

function createSession() {

    //Open session
    session_start();
    
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } 
    
    else {
        $_SESSION['count']++;
    }
    
}

function checkCookie($user) {
      
    // Set test cookie
    setcookie ('test', 'test', time() + 60*60);
        
    // Reload page
    header("Refresh:0");
    
    // Check if the client returns us the cookie we just set.
    if(count($_COOKIE) > 0) {
        
        //Delete test cookie
        setcookie('test', 'test', time() - 42000);
        
        //Cookies are enabled. We can now delete the test cookie.
        return TRUE;
    }
    
    else {
        
        //Delete test cookie.
        setcookie('test', 'test', time() - 42000);
        
        //Cookies are disabled.
        return FALSE;
    }
}

?>
