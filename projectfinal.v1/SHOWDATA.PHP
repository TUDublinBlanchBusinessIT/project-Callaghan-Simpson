<?php
date_default_timezone_set('Europe/Dublin');
include("dbconn.php");

$sql= "Select * from player";
/*Sets the booleans to blank or color if needed*/
$selection= array('1' => 'White', '0' => '');
$selection1= array('1' => 'Blue', '0' => '');
$selection2= array('1' => 'Black', '0' => '');
$selection3= array('1' => 'Red', '0' => '');
$selection4= array('1' => 'Green', '0' => '');
echo "<table border='1'>";
$output = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($output)) {
    $fn= $row ['Firstname'];
    $sn= $row ['Surname'];
    $white= $selection [$row['white']];
    $blue= $selection1 [$row['blue']];
    $black= $selection2 [$row['black']];
    $red= $selection3 [$row['red']];
    $green= $selection4 [$row['green']];
    $power=$row ['deck_level'];


    echo"<tr><td>$fn</td><td>$sn</td><td> $white $blue $black $red $green</td><td>$power</td></tr>";
}
echo"</table>";



?>