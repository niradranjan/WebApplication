<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT match_id, stadium_name FROM matches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["player_id"]. " - Name: " . $row["player_name"]. "<br>";
    }
} else {
    echo "0 results";
}


echo "Connected successfully";
$conn->close();
?>