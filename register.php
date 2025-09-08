<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";   // default user
$password = "root";       // default password blank in AWebServer
$dbname = "testdb";   // apka database naam

$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];

// Insert query
$sql = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$pass', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>