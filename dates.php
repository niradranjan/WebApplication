<?php

include ('Connection.php');
$from_date = $_POST['dates1'];

$to_date = $_POST['dates2'];


		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "DBD_Project";

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

		$sql = "Select * from matches where date between '$from_date' AND '$to_date'";
		$result = $conn->query($sql);

		echo "<table class=w3-table border='1'>
		<tr>
		<th>Stadium Name</th>
		<th>Team_1_Score</th>
		<th>Team_2_Score</th>
		<th>Winning Team</th>
		<th>Man of the Match</th>
		</tr>";
		
		if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
  		echo "<tr>";
  		echo "<td>" . $row['stadium_name'] . "</td>";
  		echo "<td>" . $row['team_1_score'] . "</td>";
  		echo "<td>" . $row['team_2_score'] . "</td>";
  		echo "<td>" . $row['winning_team'] . "</td>";
  		echo "<td>" . $row['man_of_the_match'] . "</td>";
		echo "</tr>";
    	}
		} else {
   	 echo "0 results";
}

	echo "</table>";
 $conn->close();


?>