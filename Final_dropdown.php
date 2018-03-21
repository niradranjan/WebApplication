<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT stadium_name FROM matches";
$result = $conn->query($sql);
 
echo "<form action='page.php' method='post'>";
echo "<select id = 'name' name = 'name'>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
	echo  "<option value='" . $row['stadium_name'] . "'>". $row['stadium_name'] . "</option>";
	echo  "<option value='" . $row['stadium_name'] . "'>". $row['stadium_name'] . "</option>";
	
  		}
} else {
    echo "0 results";
}

echo "</select>";
 
$conn->close();
echo "<input type='submit' value='Submit!'>";
echo "</form>";
?>