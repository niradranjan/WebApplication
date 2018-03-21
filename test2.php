<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT team_1 FROM matches";
$result = $conn->query($sql);
 
echo "<form action='tables.php' method='post'>";
echo "<select id = 'team1' name = 'team1'>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
	echo  "<option value='" . $row['team_1'] . "'>". $row['team_1'] . "</option>";
	
  		}
} else {
    echo "0 results";
}

echo "</select>";

$sql_2 = "SELECT team_2 FROM matches";
$result_2 = $conn->query($sql_2);
echo "<form action='tables.php' method='post'>";
echo "<select id = 'team2' name = 'team2'>";
if ($result_2->num_rows > 0) {
    // output data of each row
    while($row = $result_2->fetch_assoc()) {
    	
	echo  "<option value='" . $row['team_2'] . "'>". $row['team_2'] . "</option>";
	
  		}
} else {
    echo "0 results";
}

echo "</select>";
 
$conn->close();
echo "<input type='submit' value='Submit!'>";
echo "</form>";
?>