<?php
$servername = "localhost";
$username = "gharpesa_gharpe";
$password = "Gharpesalon.com";
$dbname = "gharpesa_gharpesalon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>