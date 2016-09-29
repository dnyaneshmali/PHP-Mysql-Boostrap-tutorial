<?php


$servername = 'localhost';
$serveruser = 'root';
$serverpass = '';
$dbname = 'db_test';

//Create Connection

$conn = mysqli_connect($servername,$serveruser,$serverpass);
mysqli_select_db($conn, $dbname);

?>