<?php

// Create connection
global $servername ;
global  $username ;
global $password ;
global $database ;
$conn = null; 

function connectrDatabase(){

$servername = "localhost";
$username = "root";
$password = "";
$database ="todolist";
global $conn;
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  
  die("Connection failed: " . mysqli_connect_error());

}
}
?>