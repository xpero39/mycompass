<?php

// ADD USER LOGIN! - TEMPORARY LOGIN
$servername = "localhost";
$username = "root";
$password = "connect";
$dbname = "compass_db";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) { // Check connection
    die( "Connection failed: " . $conn->connect_error);
}

?>