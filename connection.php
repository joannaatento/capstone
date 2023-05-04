<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "capstone";
 
/* Attempt to connect to MySQL database */
$conection_db = mysqli_connect($server, $user, $password, $database);
 
// Check connection
if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
