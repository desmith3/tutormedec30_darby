<?php

//access variables
/*
$dbHost = "us-cdbr-azure-central-a.cloudapp.net"; 
$dbUserAndName = "bd9e530fb6d02e"; 
$dbPass = "d0b30ef6";
$database = "smith";
*/

$dbHost = "localhost"; 
$dbUserAndName = "root"; 
$dbPass = "root";
$database = "smith";

// Create connection to database
global $con;
$con = mysqli_connect($dbHost, $dbUserAndName, $dbPass);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
//select database
$bool = mysqli_select_db($con, $database);
if ($bool === False){
	echo "Can't find the specified database: $database";
}
?>
