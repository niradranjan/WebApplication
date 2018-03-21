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
//search code
//error_reporting(0);
//echo "Here";


if($_REQUEST['submit']){
$name = $_POST['name'];
if(empty($name)){
	$make = '<h4 >You must type a word to search!</h4>';
}else{
	$make = '<h4 style="color:blue;margin-left:30px;">No match found!</h4>';
	$sql = "SELECT player.player_name,player.team_name,player.player_dob,matches.stadium_name,matches.team_1,matches.team_2,matches.team_1_score,matches.team_2_score,matches.man_of_the_match FROM player JOIN matches ON player.player_first_match = matches.match_id where player_name like '%$name%'";
	$result = $conn->query($sql);
	
	echo "<h3 style='color:blue '>";
	if ($result->num_rows > 0){
		 while($row = $result->fetch_assoc()) {
			echo "The International Cricket player". " " . $row['player_name']. " " . "from team" . " " . $row['team_name'] .  " " . "was born on " . " " . $row['player_dob'] ."<br>";
			echo "He played his first match at" . " " . $row['stadium_name'] . " " . "against" . " " . $row['team_2']. "<br>";
			echo $row['team_1'] . " " . "scored a total of" . " " . $row['team_1_score'] . " as compared to" . " " . $row['team_2_score'] ." " . "by" . $row['team_2']. "<br>"; 
			echo $row['man_of_the_match'] . " " . "was declared the Man of the Match in this game." . "<br>";
	}
}else{
print ($make);
}
	echo "</h3>";
//mysql_free_result($result);
$conn->close();
}
}
?>