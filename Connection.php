<html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->close();
?>
</html>
