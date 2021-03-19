<?php
$servername = "eu-az-sql-servca0b8bea36444442ae8d0b9d8df984c5.database.windows.net";
$username = "u9rae5khdldm5mi";
$password = "O%EVD2h0Bn@dPSrb7IrM%Df3Q";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
