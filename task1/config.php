<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="danish";
global $conn;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection

if (!$conn):

	die("<center>Connection failed: " . mysqli_connect_error()."</center>");
endif;
