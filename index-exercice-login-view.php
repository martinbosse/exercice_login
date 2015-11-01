<?php

$htmlOut = '';

if ($SESSION['LOGGEDIN']) {
    
    $htmlOut = 'X';
    
    $htmlOut .= 'Y';
    
    $htmlOut .= 'Z';
    
} else {
    
    $htmlOut = "<form action=\"\" method=\"POST\">\n";
    
    $htmlOut .= '<input>';
    
    $htmlOut .= '</form>';
    
}