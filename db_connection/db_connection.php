<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "student32.site32";
 $dbpass = "ilovesmePS3";
 $db = "site32";
 $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if( !$connect)
{
	die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
else
{
	print("<p>It worked!</p>");
}

//place code hre to work with the database
mysqli_close($connect); //close connection
 }
?>
