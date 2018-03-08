<?php
$siteHome = 'http://skool-encryptor699267.codeanyapp.com/Skool';
$databaseHost = 'localhost';
$databaseName = 'Skool';
// Define $databaseUsername in password.php
// Define $databasePassword in password.php
require('password.php');
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>