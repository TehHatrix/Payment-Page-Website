<?php
/*******MySQLi******/

//Step 1: Connecting to a Database using MySQLi API (Object-Oriented approach)
// modify these variables for your installation
$databaseHost = 'localhost';
$databaseName = 'treasurehunt';
$databaseUsername = 'nasrul';
$databasePassword = 'abewe';


//MySQLi Object-Oriented approach
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//MySQLi Procedural
//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//Step 2: Handling Connection Errors - mysqli 
// Check connection (MySQLi object-oriented)
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  //echo "Database Connected successfully";

// Procedural - mysqli_connect_errno returns the last error code
/*if ( mysqli_connect_errno() ) {
	// die() is equivalent to exit()
	die( "Database connection failed: " . mysqli_connect_error() );	
	
}*/
//echo "Database connected successfully <br>";

?>
