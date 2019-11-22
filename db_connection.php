<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "student32.site32";
 $dbpass = "ilovesmePS3";
 $db = "site32";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
