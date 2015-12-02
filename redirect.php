<?php // Check if the client returns us the cookie we just set.
if (isset($_COOKIE['test'])) {
    
    //Cookies are enabled. We can now delete the test cookie.
    //setcookie('test', '', time() - 42000);
    
    return TRUE;
}

else {
    //Cookies are disabled.
    return FALSE;
}

?>