<?php
include ('Connection.php');
$team_1 = $_POST['team1'];

$team_2 =  $_POST['team2'];


		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "DBD_Project";

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

		$sql = "Select * from matches where team_1 like '$team_1' and team_2 like '$team_2'";
		$result = $conn->query($sql);
 
		echo "<table class=w3-table border='1'>
		<tr>
		<th>Match Stats</th>
		</tr>";
 
		if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    	echo "<tr>";
  		echo "<td>" . "Played at" . " ". $row['stadium_name'] . "</td>";
  		echo "</tr>";
  		
  		echo "<tr>";
  		echo "<td>" . $row['team_1'] . " " . "scored" . " " .$row['team_1_score'] . " " ."runs" . "</td>";
  		echo "</tr>";
  		
  		
  		echo "<tr>";
  		echo "<td>" . $row['team_2'] . " " . "scored" . " " .$row['team_2_score'] . " " ."runs" . "</td>";
  		echo "</tr>";
  		
  		echo "<tr>";
  		echo "<td>" . "Played on" . " " .$row['date'] . "</td>";
  		echo "</tr>";
  		
  		echo "<tr>";
  		echo "<td>" . "Team" . " " .$row['winning_team'] . " " . "emerged as the winner" . " " . "</td>";
  		echo "</tr>";
  		
  		echo "<tr>";
  		echo "<td>" . $row['man_of_the_match'] . " " . "was declared the Man of the Match!". "</td>";
  		echo "</tr>";
  		
  		
    	}
		} else {
   	 echo "0 results";
}

	echo "</table>";
 
	$conn->close();

?>