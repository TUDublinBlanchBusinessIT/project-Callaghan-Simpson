<?php
date_default_timezone_set('Europe/Dublin');
include("dbconn.php");

$sql= "Select * from player";

$selection= array('1' => 'White', '0' => '');

$output = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($output)) {
    $fn=$row['Firstname'];
    $sn=$row['Surname'];
    $white=$selection[$row['white']];
    $blue=$row['blue'];
    $black=$row['black'];
    $red=$row['red'];
    $green=$row['green'];
    $power=$row['deck_level'];


    echo"$fn, $sn, $white, $blue, $black, $red, $green, $power<br>";
}


?>