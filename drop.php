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

$sql = "SELECT match_id FROM match";
$result = $conn->query($sql);

echo "<select name='match_id'>";
while ($row = $result->fetch_assoc()) {
	echo $row;
    echo "<option value='" . $row['match_id'] . "'>" . $row['match_id'] . "</option>";
}
echo "</select>";

?>
