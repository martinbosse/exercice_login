<?php

ob_start;

require_once 'frontHomeLogin.php';
require_once 'backOpenSession.php';
require_once 'backCloseSession.php';
require_once 'backCheckLogin.php';
require_once 'validRegex.php';

// Login verification.
if (isset($_POST['submit']))  {

    if ((!isset($_POST['user'])) || (empty($_POST['user'])) || 
       (!isset($_POST['password'])) || (empty($_POST['password'])))
    {
        // une erreur de saisie ...?
        (string) $error = '<p">Erreur de connexion : Vous devez remplir tous les champs.</p>';
        return $error;
    }
    
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        if (!checkRegex1($user))  {
            (string) $error = '<p">Erreur de connexion : Caractères illégaux (Seuls les nombres, les lettres (majuscules et miniscules) et la barre de soulignement sont permis ).</p>';
        return $error;
        }
        elseif (!checkRegex2($password)) {
            (string) $error = '<p">Erreur de connexion : Caractères illégaux (Seuls les nombres, les lettres (majuscules et miniscules) et la barre de soulignement sont permis ).</p>';
        return $error;   
        } 
         
        elseif (!checkLogin($user,$password))  {
            (string) $error = '<p">Erreur de connexion. Essayez à nouveau</p>';
            return $error; 
        }   
            $nameforcookie = getFirstName($user);
            createSession($nameforcookie);
             
            if (checkCookie()) {
                header ("Location: frontLogin1.php");
            }
            
            else {
                closeSession($nameforcookie);
            }
    
            
ob_flush();

flush();

exit;
     
         
}

   
