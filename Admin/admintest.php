<?php

$server = "localhost";
$user = "student32.site32";
$pw = "ilovesmePS3";
$db = "site32";

$connect=mysqli_connect($server, $user, $pw, $db);
if(!connect)
{
  die("ERROR: Cannot connect to database $db on server $server using name $user (".mysqli_connect_errno().", ".mysqli_connect_error().")");
}
//place code hre to work with the database
mysqli_close($connect); //close connection


?>