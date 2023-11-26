<?php

$fn= $_POST['fn']
$sn= $_POST['sn']
$white= $_POST['white']
$blue= $_POST['blue']
$black=$_POST['black']
$red=$_POST['red']
$green=$_POST['green']

include("dbconn.php");

$sql ="insert into player"(Firstname,Surname,white, blue, black, red, green)
values($fn,$sn,$white,$blue,$black,$red,$green);
/*
$sql="insert into color"(white, blue, black, red, green)
values($white,$blue,$black,$red,$green;)
*/
?>