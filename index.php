<?php
$servername = "localhost";
$username = "id8972136_root";
$password = "root001";
$database = "id8972136_akademik";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$customers = $conn->query("SELECT * FROM customer");
if ($customers->num_rows > 0) {
    while($row = $customers->fetch_assoc()) {
        echo "$row[nama] ($row[gender])<br>$row[alamat]<br>";
    }
}

if ($conn){
    $conn->close();
}
