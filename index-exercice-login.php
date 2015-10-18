<?php

include 'index-exercice-login.phtml';
include 'index-exercice-login-model.php';

// Must be included after login verification
include 'index-exercice-login-session.php';

//
// Backend
// bool authenticate($user, $pass);
// // array [assoc] where 'assoc' is column name, order : lastname, firstname, favorite color, last login.
// array[assoc] getUserParams($user, $newUser = TRUE)
// ---
// Middle
// Include backend
// Include frontend
// Include session management
// // Fills global array $_SESSION with user params.  Function declaration within session management ?
// bool setUserParams(array[assoc])
// ---
// Frontend
// //User name, Last login, Favorite Color in $_SESSION ['name', 'login', 'favColor']
