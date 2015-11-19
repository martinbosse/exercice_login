<?php

require_once 'frontHomeLogin.php';
require_once 'backOpenSession.php';
require_once 'backCloseSession.php';
require_once 'backCheckLogin.php';

// Login verification.
if (isset($_POST['submit']))  {

    if ((!isset($_POST['user'])) || (empty($_POST['user'])) || 
       (!isset($_POST['password'])) || (empty($_POST['password'])))
    {
        // une erreur de saisie ...?
        echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
    }
     else {   
         
         $user = $_POST['user'];
         $password = $_POST['password'];
         
         checklogin($user, $password);
        
        if ($login == FALSE)  {
          
            // une erreur de saisie ...?
            echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
            }
        else {
            
            getfirstname($user);
            
            session_start()
        }
            
            
            
        }
}

    

