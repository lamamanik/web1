<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'travel_cms';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection error: " . mysqli_connect_error());
}

return $conn;
?>
