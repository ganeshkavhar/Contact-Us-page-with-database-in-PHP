<?php
$host = "localhost";
$user = "root"; // Change this if needed
$pass = "";     // Set your MySQL password
$dbname = "your_database_name";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>