<?php
 
$htmlOut = '';
$htmlOut .= '<div class="mainContainer">';
$htmlOut .= '<div class="formContainer">';
$htmlOut .= ' <form action="checklogin.php" method="post">';
$htmlOut .= '<input type="text" name="username" placeholder="Enter you username">';
$htmlOut .= '<input type="password" name="password" placeholder="Enter your password"><br>';
$htmlOut .= '<input type="submit" name="submit" value="submit">';
$htmlOut .= '</form>';
$htmlOut .= '</div>';  
$htmlOut .= '</div>';