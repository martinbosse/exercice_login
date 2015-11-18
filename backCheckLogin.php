<?php 

function conn($server, $user, $password, $database) {
    
    if (!isset($conn)) {
        // Connect to MySQL database
        $conn = new mysqli($server, $user, $password, $database);
    }    
    
    // Make sure you're connected
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //If we get here, a connexion has been established
    return $conn;
}

function checkLogin($user, $password) {
    
    //Connect to database. With Apache, localhost doesn't work.
    $conn = conn('127.0.0.1', 'someuser', 'password', 'exercicelogin');
    
    //Obtain the password for the given username
    $passworddb = mysqli_query($conn, "SELECT password, firstname FROM users 
        WHERE users.username = '$user'");
    
    //Get the result, then compare with the password given by the user
    $result = mysqli_fetch_array($passworddb);
    
    //Patch to avoid an empty password giving access to the site.
    if ($password == '') {
        return false;
    }
    
    $login = ($password == $result[0]);
    
    //Return a boolean to say if we must open a session or not.
    return $login;
    
}

function getFirstName ($user) {
    
    //Connect to database. With Apache, localhost doesn't work.
    $conn = conn('127.0.0.1', 'someuser', 'password', 'exercicelogin');
    
    $realname = mysqli_query($conn, "SELECT firstname FROM users 
        WHERE users.username = '$user'");
    
    //Get the result, then compare with the password given by the user
    $result = mysqli_fetch_array($realname);
    
    $realname = $result[0];
    
    return $realname;
    
}

?>