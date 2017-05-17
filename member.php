<?php
session_start();

print_r($_SESSION);
echo "<br>Hello and welcome " . $_SESSION['userName'];

//create a log out link right here

?>
