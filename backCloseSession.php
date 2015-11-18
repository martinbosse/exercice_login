<?php
        
        //Method from the PHP manual for session_destroy()
        
        // Unset all of the session variables.
        $_SESSION = array();
        
        //Delete the session cookie with the same parameters it was set
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], 
            $params['domain'], $params['secure'], isset($params['httponly']));
        
        //close session
        session_destroy();
        
        session_unset();
            
        //Return the user to the login page
        header ("Location: frontHomeLogin.php");
