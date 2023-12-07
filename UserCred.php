<?php
date_default_timezone_set('Europe/Dublin');
include("dbconn.php");

    $fn= $_POST['fn'];
    $sn= $_POST['sn'];


    $white= isset($_POST['white'])?1:0;
    $blue= isset($_POST['blue'])?1:0;
    $black=isset($_POST['black'])?1:0;
    $red=isset($_POST['red'])?1:0;
    $green=isset($_POST['green'])?1:0; 
    $power=$_POST['power'];



       $sql ="INSERT INTO player(Firstname, Surname, white, blue, black, red, green,deck_level)
        VALUES('$fn','$sn','$white','$blue','$black','$red','$green','$power')";
/*
       $sql2 ="INSERT INTO deckpowerlevelcount(lvl_1, lvl_2, lvl_3, lvl_4, lvl_5, lvl_6, lvl_7)
        VALUES('$lvl_1','$lvl_2','$lvl_3','$lvl_4','$lvl_5','$lvl_6','$lvl_7')";*/
        
mysqli_query($conn, $sql);
/*mysqli_query($conn, $sql2);*/
mysqli_close($conn);




echo"done";


?>