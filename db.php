<?php
// db_connect.php

$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "airline";

// Create connection
$con = new mysqli($servername, $username, "", "airline");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>