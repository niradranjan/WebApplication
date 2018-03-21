<!DOCTYPE html>
<html>
<title>CricStats</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#insights" class="w3-bar-item w3-button w3-padding-large w3-hide-small">INSIGHTS</a>
    <a href="#rankings" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RANKINGS</a>
    <a href="#records" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RECORDS</a>
    <a href="#players" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PLAYERS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-bar-item w3-padding-large w3-right">LOGIN</button>
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-dark-grey w3-card-4 w3-animate-zoom" style="max-width:400px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>

      <form class="w3-container" method = "post" action="process.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-light-green w3-section w3-padding"  type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
    </div>
    
  </div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#insights" class="w3-bar-item w3-button w3-padding-large">INSIGHTS</a>
  <a href="#rankings" class="w3-bar-item w3-button w3-padding-large">RANKINGS</a>
  <a href="#records" class="w3-bar-item w3-button w3-padding-large">RECORDS</a>
  <a href="#players" class="w3-bar-item w3-button w3-padding-large">PLAYERS</a>

</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="image1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small"> 
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>

  <!-- The About Us Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="insights">
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

$sql = "SELECT article FROM latest_news";
$result = $conn->query($sql);
echo "<font><marquee>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['article'] . "<br>";
    }
} else {
    echo "0 results";
}
echo "</font></marquee>";
$conn->close();
?>
   </div>

  <!-- The Rankings Section -->
  <div class="w3-black" id="rankings">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RANKINGS</h2>
      <p class="w3-opacity w3-center"><i>Check the rankings of your favorite players!</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="Batsman" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Top Batsmen</b></p>
            <p>Check the Top 10 batsmen in all formats!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('batsmanModal').style.display='block'">Click here</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/paris.jpg" alt="Bowlers" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Top Bowlers</b></p>
            <p>Check the Top 10 bowlers in all formats!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('bowlerModal').style.display='block'">Click here</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="Teams" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Top Teams</b></p>
            <p>Check the Top 10 teams in all formats!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('teamModal').style.display='block'">Click here</button>
          </div>
        </div>
      </div>
    </div>
  </div>

	<!-- Batsman Modal -->
	<div id="batsmanModal" class="w3-modal" style="width:80%" >
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('batsmanModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT player.player_name from player JOIN batsman ON batsman.batsman_id = player.player_id ORDER BY (batsman.runs_scored/batsman.matches_played) DESC ;";
$result = $conn->query($sql);
 
echo "<table class=w3-table border='1'>
<tr>
<th>Top Batsmen</th>
</tr>";
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
  		echo "<td>" . $row['player_name'] . "</td>";
  		echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";
 
$conn->close();
?>
      </div>
    </div>
  </div>
  <!-- Bowler Modal -->
	<div id="bowlerModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('bowlerModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "DBD_Project";

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

		$sql = "SELECT player.player_name from player JOIN bowler ON bowler.bowler_id = player.player_id ORDER BY (bowler.wickets_taken/bowler.matches_played) DESC";
		$result = $conn->query($sql);
 
		echo "<table class=w3-table border='1'>
		<tr>
		<th>Top Bowlers</th>
		</tr>";
 
		if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    	echo "<tr>";
  		echo "<td>" . $row['player_name'] . "</td>";
  		echo "</tr>";
    	}
		} else {
   	 echo "0 results";
}

	echo "</table>";
 
	$conn->close();
	?>

      </div>
    </div>
  </div>
  
    <!-- Team Modal -->

  <div id="teamModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('teamModal').style.display='none'" 
       class="w3-button w3-teal w3-large w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "DBD_Project";

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

		$sql = "SELECT team_name FROM team ORDER BY team_rank ASC ";
		$result = $conn->query($sql);
 
		echo "<table class=w3-table border='1'>
		<tr>
		<th>Top Teams</th>
		</tr>";
 
		if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    	echo "<tr>";
  		echo "<td>" . $row['team_name'] . "</td>";
  		echo "</tr>";
    	}
		} else {
   	 echo "0 results";
}

	echo "</table>";
 
	$conn->close();
	?>
      </div>
    </div>
  </div>
  
  
   <!-- The Records Section -->
  <div class="w3-black" id="records">
    <div class="w3-container w3-content w3-padding-64" style="max-width:400px">
      <h2 class="w3-wide w3-center">RECORDS</h2>
      <p class="w3-opacity w3-center"><i>Check the records category-wise!</i></p><br>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class=" w3-margin-bottom">
          <div class="w3-container w3-white">
            <p class="w3-center"><b>Team Records</b></p>
            <p class="w3-center">Click to view the records created by various teams!</p>
            <button style="margin:0 125px" class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('teamRecordsModal').style.display='block'">Click here</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div id="teamRecordsModal" class="w3-modal" style = "width:100%">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('teamRecordsModal').style.display='none'" 
       class="w3-button w3-teal w3-small w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
      	include('test2.php');
      	?>
      
      </div>
    </div>
  </div>
  
  
   <!-- The Players Section -->
  <div class="w3-black" id="players">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PLAYERS</h2>
      <p class="w3-opacity w3-center"><i>Read about your favorite players!</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Dhoni</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('player1Modal').style.display='block'">Click here</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Shane Bond</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('player2Modal').style.display='block'">Click here</button>
          </div>
        </div>
        
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p class="w3-center"><b>Search Players</b></p>
			<html>
			<head>
			</head>
			<body>
			<form action="search_result.php" method="POST">
			<center>
			<input type="text" name="name" size="15"></br>
			<input type="submit" name="submit" class="w3-black">
			</center>
</form>
</body>

</html>
          </div>
        </div>
        </div>
    </div>
  </div>

	<!-- Player1 Modal -->
	<div id="player1Modal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('player1Modal').style.display='none'" 
       class="w3-button w3-teal w3-small w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT player.player_name,player.team_name,player.player_dob,matches.stadium_name,matches.team_1,matches.team_2,matches.team_1_score,matches.team_2_score,matches.man_of_the_match FROM player JOIN matches ON player.player_first_match = matches.match_id where player_name like '%Dhoni%' ";
$result = $conn->query($sql);
 

 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "The International Cricket player". " " . $row['player_name']. " " . "from team" . " " . $row['team_name'] .  " " . "was born on " . " " . $row['player_dob'] ."<br>";
			echo "He played his first match at" . " " . $row['stadium_name'] . " " . "against" . " " . $row['team_2']. "<br>";
			echo $row['team_1'] . " " . "scored a total of" . " " . $row['team_1_score'] . " as compared to" . " " . $row['team_2_score'] ." " . "by" . " " . $row['team_2']. "<br>"; 
			echo $row['man_of_the_match'] . " " . "was declared the Man of the Match in this game." . "<br>";
    } 
} else {
    echo "0 results";
}

echo "</table>";
 
$conn->close();
?>
      </div>
    </div>
  </div>
  <!-- Player2 Modal -->
	<div id="player2Modal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('player2Modal').style.display='none'" 
       class="w3-button w3-teal w3-small w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "DBD_Project";

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

		$sql = "SELECT player.player_name,player.team_name,player.player_dob,matches.stadium_name,matches.team_1,matches.team_2,matches.team_1_score,matches.team_2_score,matches.man_of_the_match FROM player JOIN matches ON player.player_first_match = matches.match_id where player_name like '%Shane%'  ";
		$result = $conn->query($sql);
 
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "The International Cricket player". " " . $row['player_name']. " " . "from team" . " " . $row['team_name'] .  " " . "was born on " . " " . $row['player_dob'] ."<br>";
			echo "He played his first match at" . " " . $row['stadium_name'] . " " . "against" . " " . $row['team_2']. "<br>";
			echo $row['team_1'] . " " . "scored a total of" . " " . $row['team_1_score'] . " as compared to" . " " . $row['team_2_score'] ." " . "by" . " " . $row['team_2']. "<br>"; 
			echo $row['man_of_the_match'] . " " . "was declared the Man of the Match in this game." . "<br>";
    } 
} else {
    echo "0 results";
}
echo "</table>";	
 
	$conn->close();
	?>
      </div>
    </div>
  </div>
  <!-- Search Player Modal -->
	<div id="searchPlayerModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <span onclick="document.getElementById('searchPlayerModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
      </header>
      <div class="w3-container">
      	<html>
	<title> PHP MYSQL - Search</title>
	<head>
	</head>
	<body>
	<form action="search_result.php" method="POST">
	<center><h3>Search Database</h3></center>
	<center><table>
	<tr>
		<td>Search</td>
		<td><input type="text" name="name" size="100"></td>
		<td><input type="submit" name="submit"></td>
	</tr>
	</table></center>
	</form>
	</body>
</html>
      </div>
    </div>
  </div>
  

  <!-- The Contact Section -->
  <div class="w3-container w3-content" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Bloomington,IN<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +812-558-1363 / +812-272-7810<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: slnyayap@umail.iu.edu<br>
      </div>        
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-10 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal1 = document.getElementById('batsmanModal');
window.onclick = function(event) {
  if (event.target == modal1) {
    modal.style.display = "none";
  }
}

var modal2 = document.getElementById('bowlerModal');
window.onclick = function(event) {
  if (event.target == modal2) {
    modal.style.display = "none";
  }
}
var modal3 = document.getElementById('teamModal');
window.onclick = function(event) {
  if (event.target == modal3) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
