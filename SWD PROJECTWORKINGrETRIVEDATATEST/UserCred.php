<?php
date_default_timezone_set('Europe/Dublin');
include("dbconn.php");
/*
if(isset($_POST['INFO']))
{*/
    $fn= $_POST['fn'];
    $sn= $_POST['sn'];


    $white= isset($_POST['white'])?1:0;
    $blue= isset($_POST['blue'])?1:0;
    $black=isset($_POST['black'])?1:0;
    $red=isset($_POST['red'])?1:0;
    $green=isset($_POST['white'])?1:0; 
    /*

    $DeckPower = isset($_POST['power']) ? $_POST['power'] : null;

    $lvl_1=$_POST['lvl1'];
    $lvl_2=$_POST['lvl2'];
    $lvl_3=$_POST['lvl3'];
    $lvl_4=$_POST['lvl4'];
    $lvl_5=$_POST['lvl5'];
    $lvl_6=$_POST['lvl6'];
    $lvl_7=$_POST['lvl7'];
*/


       $sql ="INSERT INTO player(Firstname,Surname, white, blue, black, red, green)
        VALUES('$fn','$sn','$white','$blue','$black','$red','$green')";

      /*  $sql ="INSERT INTO deckpowerlevelcount(lvl_1,lv_2,lvl_3,lvl_4,lv_5,lvl_6,lvl_7)
        VALUES('$DeckPower')";*/
        
mysqli_query($conn, $sql);
mysqli_close($conn);




echo"done";


?>