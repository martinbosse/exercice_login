<html>
<body>
<?php 

if (!isset($_COOKIE['PHPSESSID'])) {
    header ("Location: frontHomeLogin.php");
}

session_name($_COOKIE['PHPSESSID']);
session_start();
session_regenerate_id();

?>
<p>
<?php echo "Welcome to page 2. Get back on page 1 or disconnect?";?>
</p>
<p>
<a href="frontLogin1.php">Page 1</a>
</p>
<?php echo "You last saw page 1 at " . $_SESSION['time'];?>

<form action="backDisconnect.php" method="post">
<br>
<input type="submit" value="Disconnect">
</form>
</body>
</html>