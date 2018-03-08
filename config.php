<?php

$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = getenv('DB_USERNAME');
$databasePassword = getenv('DB_PASSWORD');
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>