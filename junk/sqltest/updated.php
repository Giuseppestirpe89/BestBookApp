<?php
$servername = "127.0.0.1";
$username = "donwhelan";
$password = "";
$dbname = "user_details";
$port = 3306;

$usernamew="don-whelan";
$passwordw="don-whelan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $sql = "UPDATE users
//         SET username='testdon'
//         WHERE username='don-whelan';";

$sql = "INSERT INTO users (username, password)
VALUES ('don-whelan','don-whelan');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>