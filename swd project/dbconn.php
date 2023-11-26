<?php
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "database";
$port = 3306;

date_default_timezone_set('Europe/Dublin');
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, $sql);

mysqli_close($conn);

?>