<?php
date_default_timezone_set('Europe/Dublin');

$servername = "localhost";
$username = "user";
$password = "";
$dbname = "Commanders";
$port = 3306;


$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, $sql);

mysqli_close($conn);

?>