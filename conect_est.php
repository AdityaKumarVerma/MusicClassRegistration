<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root1';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) 
		or die('Error Connecting To mysql');
/*if($conn) 
 { 
  echo 'CONNECTED TO SERVER'; 
 }*/ 
  

$dbname ='music_school';
$dbconn = mysqli_select_db($conn, $dbname);

/*if($dbconn) 
 { 
  echo 'CONNECTED TO DATABASE'; 
 }*/

?>