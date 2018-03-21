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


  $result = $conn->query("select batsman_id, batsman_name from batsman");
    echo "<html>";
    echo "<body>";
    echo "<select name='batsman_id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($batsman_id, $batsman_name);
                  $batsman_id = $row['batsman_id'];
                  $batsman_name = $row['batsman_name']; 
                  echo '<option value="'.$batsman_id.'">'.$batsman_name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>