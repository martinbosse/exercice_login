<?php

require_once 'openSession.php';
require_once 'closeSession.php';

createSession();

$user = 'martinbeaudry';

if (checkCookie($user)) {
    
    /*In case of a positive response, the controller should
     * bring the user to the first page of the Website to
     * which the session has been opened with a header function
     * like the one below.
     */
    
    //header ("Location: <sessionOuverte.php>");
    echo 'Cookies are enabled in your browser.';
}

else {
    
    /*In case of a negative response, the controller should bring
    the user to a page informing him/her that cookies are disabled
    in his browser (with the help of a header() function like the one 
    below), call the closeSession() function, then bring the user back
    to the authentification page so he can open a session with cookies
    enabled. */
    //header ("Location: <cookieDesactive>");
    echo 'Cookies are disabled in your browser.';
}

closeSession();

/*More complete solution to check cookies 
 * proposed by Nathan Long from Stack Overflow :
 * if (isset($_SERVER['HTTP_COOKIE'])) {
 * $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
 * foreach($cookies as $cookie) {
 * $parts = explode('=', $cookie);
 * $name = trim($parts[0]);
 * setcookie($name, '', time()-1000);
 * setcookie($name, '', time()-1000, '/');
 * }
 */

?>
