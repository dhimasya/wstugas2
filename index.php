<?php
$servername = "localhost";
$username = "id8972136_root";
$password = "root001";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

if ($conn){
    $conn->close();
    echo "Connection closed";
}
