<html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM batsman";
$result = $conn->query($sql);
 
echo "<table border='1'>
<tr>
<th>batsman_id</th>
<th>matches_played</th>
<th>runs_scored</th>
<th>balls_faced</th>
</tr>";
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
  		echo "<td>" . $row['batsman_id'] . "</td>";
  		echo "<td>" . $row['matches_played'] . "</td>";
  		echo "<td>" . $row['runs_scored'] . "</td>";
  		echo "<td>" . $row['balls_faced'] . "</td>";
  		echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";
 
$conn->close();
?>
</html>