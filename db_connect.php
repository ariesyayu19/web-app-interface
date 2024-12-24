<?php
$host = 'localhost';
$user = 'root'; // Default user for Laragon
$password = ''; 
$database = 'uitm_profiles';

// for Create connection
$conn = new mysqli($host, $user, $password, $database);

// for Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 

?>
