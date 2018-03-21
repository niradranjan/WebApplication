<!DOCTYPE html>
<html>
<title>CricStatsAdminPage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
</style>
<body>
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-small">WELCOME ADMIN</a>
    <a class="w3-button w3-bar-item w3-padding-large w3-right" href="logout.php">LOG OUT</a>
  </div>
  </div>

<div class="w3-sidebar w3-bar-block w3-light-green w3-card" style="width:200px">
  <h5 class="w3-bar-item">Operations</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openFrame(event, 'select')">SELECT</button>
  <button class="w3-bar-item w3-button tablink" onclick="openFrame(event, 'insert')">INSERT</button>
  <button class="w3-bar-item w3-button tablink" onclick="openFrame(event, 'update')">UPDATE</button>
  <button class="w3-bar-item w3-button tablink" onclick="openFrame(event, 'delete')">DELETE</button>
  <button class="w3-bar-item w3-button tablink" onclick="openFrame(event, 'submit')">SUBMIT QUERY</button>
</div>

<div style="margin-left:200px">
  <div style="margin-top:150px">

	<div id="batsman" class="selecttable" style="display:none">
		<?php
       		DEFINE('DB_USERNAME', 'root');
        	DEFINE('DB_PASSWORD', 'root');
        	DEFINE('DB_HOST', 'localhost');
        	DEFINE('DB_DATABASE', 'DBD_Project');

        	$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

       	 	$sql = "SELECT * FROM batsman";
        	$result = mysqli_query($conn,$sql);


      	?>
      	<div class="w3-responsive">
      		<table class="w3-table-all" >
      		<thead>
        	<tr class="w3-green">
          		<th>batsman_id</th>
          		<th>matches_played</th>
          		<th>runs_scored</th>
          		<th>balls_faced</th>
       		 </tr>
      		</thead>
      		<tbody>
        	<?php
          		while( $row = mysqli_fetch_assoc( $result ) ){
          		echo  "<tr><td>{$row['batsman_id']}</td><td>{$row['matches_played']}</td><td>{$row['runs_scored']}</td><td>{$row['balls_faced']}</td></tr>";
          		}
        	?>
      		</tbody>
    		</table>
    	</div>
	</div>

	<div id="bowler" class="selecttable" style="display:none">
		<?php

       	 	$sql = "SELECT * FROM bowler";
        	$result = mysqli_query($conn,$sql);
      	?>
      	<div class="w3-responsive">
      		<table class="w3-table-all" >
      		<thead>
        	<tr class="w3-green">
          		<th>bowler_id</th>
          		<th>matches_played</th>
          		<th>runs_conceded</th>
          		<th>wickets_taken</th>
       		 </tr>
      		</thead>
      		<tbody>
        	<?php
          		while( $row = mysqli_fetch_assoc( $result ) ){
          		echo  "<tr><td>{$row['bowler_id']}</td><td>{$row['matches_played']}</td><td>{$row['runs_conceded']}</td><td>{$row['wickets_taken']}</td></tr>";
          		}
        	?>
      		</tbody>
    		</table>
    	</div>
	</div>

	<div id="matches" class="selecttable" style="display:none">
		<?php

       	 	$sql = "SELECT * FROM matches";
        	$result = mysqli_query($conn,$sql);
      	?>
      	<div class="w3-responsive">
      		<table class="w3-table-all" >
      		<thead>
        	<tr class="w3-green">
          		<th>match_id</th>
          		<th>stadium_name</th>
          		<th>team_1</th>
          		<th>team_2</th>
          		<th>team_1_score</th>
          		<th>team_2_score</th>
          		<th>date_of_match</th>
          		<th>winning_team</th>
          		<th>man_of_the_match</th>
       		 </tr>
      		</thead>
      		<tbody>
        	<?php
          		while( $row = mysqli_fetch_assoc( $result ) ){
          		echo  "<tr><td>{$row['match_id']}</td><td>{$row['stadium_name']}</td><td>{$row['team_1']}</td><td>{$row['team_2']}</td><td>{$row['team_1_score']}</td>
          		<td>{$row['team_2_score']}</td><td>{$row['date_of_match']}</td><td>{$row['winning_team']}</td><td>{$row['man_of_the_match']}</td></tr>";
          		}
        	?>
      		</tbody>
    		</table>
    	</div>
	</div>

	<div id="player" class="selecttable" style="display:none">
		<?php

       	 	$sql = "SELECT * FROM player";
        	$result = mysqli_query($conn,$sql);
      	?>
      	<div class="w3-responsive">
      		<table class="w3-table-all" >
      		<thead>
        	<tr class="w3-green">
          		<th>player_id</th>
          		<th>player_name</th>
          		<th>team_name</th>
          		<th>player_DOB</th>
          		<th>player_first_match</th>
       		 </tr>
      		</thead>
      		<tbody>
        	<?php
          		while( $row = mysqli_fetch_assoc( $result ) ){
          		echo  "<tr><td>{$row['player_id']}</td><td>{$row['player_name']}</td><td>{$row['team_name']}</td><td>{$row['player_DOB']}</td>
          		<td>{$row['player_first_match']}</td></tr>";
          		}
        	?>
      		</tbody>
    		</table>
    	</div>
	</div>

  <div id="team" class="selecttable" style="display:none">
    <?php
          $sql = "SELECT * FROM team";
          $result = mysqli_query($conn,$sql);
        ?>
        <div class="w3-responsive">
          <table class="w3-table-all" >
          <thead>
          <tr class="w3-green">
              <th>team_name</th>
              <th>team_rank</th>
              <th>matches_played</th>
              <th>matches_won</th>
              <th>matches_lost</th>
              <th>matches_tied</th>
           </tr>
          </thead>
          <tbody>
          <?php
              while( $row = mysqli_fetch_assoc( $result ) ){
              echo  "<tr><td>{$row['team_name']}</td><td>{$row['team_rank']}</td><td>{$row['matches_played']}</td><td>{$row['matches_won']}</td>
              <td>{$row['matches_lost']}</td><td>{$row['matches_tied']}</td></tr>";
              }
          ?>
          </tbody>
        </table>
      </div>
  </div>


		<div id="stadium" class="selecttable" style="display:none">
		<?php

       	 	$sql = "SELECT * FROM Stadium";
        	$result = mysqli_query($conn,$sql);
      	?>
      	<div class="w3-responsive">
      		<table class="w3-table-all" >
      		<thead>
        	<tr class="w3-green">
          		<th>stadium_name</th>
          		<th>stadium_place</th>
          		<th>stadium_country</th>
          		<th>stadium_capacity</th>
       		 </tr>
      		</thead>
      		<tbody>
        	<?php
          		while( $row = mysqli_fetch_assoc( $result ) ){
          		echo  "<tr><td>{$row['stadium_name']}</td><td>{$row['stadium_place']}</td><td>{$row['stadium_country']}</td><td>{$row['stadium_capacity']}</td></tr>";
          		}
        	?>
      		</tbody>
    		</table>
    	</div>
	</div>



  <div id="select" class="w3-container w3-content w3-center w3-padding-64 w3-top operation"  style="display:none" >
  	<h2 class="w3-wide" style="margin-left:200px">Select Table To Display Data</h2>
		<div class="w3-bar w3-light-green" style="margin-left:200px">
  			<button class="w3-bar-item w3-button" onclick="selectTable('batsman')">batsman</button>
  			<button class="w3-bar-item w3-button" onclick="selectTable('bowler')">bowler</button>
  			<button class="w3-bar-item w3-button" onclick="selectTable('team')">team</button>
  			<button class="w3-bar-item w3-button" onclick="selectTable('matches')">matches</button>
  			<button class="w3-bar-item w3-button" onclick="selectTable('stadium')">stadium</button>
  			<button class="w3-bar-item w3-button" onclick="selectTable('player')">player</button>
		</div>
  </div>

  <div id="insert" class="w3-container w3-content w3-center w3-padding-64 w3-top operation" style="display:none">
  	<h2 class="w3-wide" style="margin-left:200px">Select Table To Insert Data</h2>
  		<div class="w3-bar w3-light-green" style="margin-left:200px">
  			<button class="w3-bar-item w3-button" onclick="insertTable('insertbatsman')">batsman</button>
        <button class="w3-bar-item w3-button" onclick="insertTable('insertbowler')">bowler</button>
        <button class="w3-bar-item w3-button" onclick="insertTable('insertteam')">team</button>
        <button class="w3-bar-item w3-button" onclick="insertTable('insertmatches')">matches</button>
        <button class="w3-bar-item w3-button" onclick="insertTable('insertstadium')">stadium</button>
        <button class="w3-bar-item w3-button" onclick="insertTable('insertplayer')">player</button>
		  </div>
  </div>

  <div id="update" class="w3-container w3-content w3-center w3-padding-64 w3-top operation"  style="display:none" >
    <h2 class="w3-wide" style="margin-left:200px">Select Table To Update Data</h2>
    <div class="w3-bar w3-light-green" style="margin-left:200px">
        <button class="w3-bar-item w3-button" onclick="updateTable('updatebatsman')">batsman</button>
        <button class="w3-bar-item w3-button" onclick="updateTable('updatebowler')">bowler</button>
        <button class="w3-bar-item w3-button" onclick="updateTable('updateteam')">team</button>
        <button class="w3-bar-item w3-button" onclick="updateTable('updatematches')">matches</button>
        <button class="w3-bar-item w3-button" onclick="updateTable('updatestadium')">stadium</button>
        <button class="w3-bar-item w3-button" onclick="updateTable('updateplayer')">player</button>
    </div>
  </div>

  <div id="delete" class="w3-container w3-content w3-center w3-padding-64 w3-top operation"  style="display:none" >
    <h2 class="w3-wide" style="margin-left:200px">Select Table To Delete Data</h2>
    <div class="w3-bar w3-light-green" style="margin-left:200px">
        <button class="w3-bar-item w3-button" onclick="deleteTable('deletebatsman')">batsman</button>
        <button class="w3-bar-item w3-button" onclick="deleteTable('deletebowler')">bowler</button>
        <button class="w3-bar-item w3-button" onclick="deleteTable('deleteteam')">team</button>
        <button class="w3-bar-item w3-button" onclick="deleteTable('deletematches')">matches</button>
        <button class="w3-bar-item w3-button" onclick="deleteTable('deletestadium')">stadium</button>
        <button class="w3-bar-item w3-button" onclick="deleteTable('deleteplayer')">player</button>
    </div>
  </div>

  <div id="submit" class="w3-container w3-content w3-center w3-padding-64 w3-top operation"  style="display:none" >
    <h2 class="w3-wide" style="margin-left:200px">Write Query To Execute</h2>
          <form class="w3-container" style="margin-left:200px" method="post" action="executequery.php">
            <textarea rows="5" cols="60" name="content" required id="content"></textarea><br>
            <button class="login-button" type="submit" name="submit">Submit Query</button><br>
          </form>
       </div> 
      </div>


		<div id="insertbatsman" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
		  <form action="insertbatsman.php" method="post" style="margin-top:10px"> 
		    <label>batsman_id</label><br/>
		    <input type="text" name="batsman_id"><br/>
		    <label>matches_played</label><br/>
		    <input type="text" name="matches_played"><br/>
        <label>runs_scored</label><br/>
        <input type="text" name="runs_scored"><br/>
        <label>balls_faced</label><br/>
        <input type="text" name="balls_faced"><br/>
		    <button type="submit" name="insert_batsman">insert</button><br>
		  </form>
 		</div>

    <div id="insertbowler" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
      <form action="insertbowler.php" method="post"> 
        <label>bowler_id</label><br/>
        <input type="text" name="bowler_id"><br/>
        <label>matches_played</label><br/>
        <input type="text" name="matches_played"><br/>
        <label>runs_conceded</label><br/>
        <input type="text" name="runs_conceded"><br/>
        <label>wickets_taken</label><br/>
        <input type="text" name="wickets_taken"><br/>
        <button type="submit" name="insert_bowler">insert</button><br>
      </form>
    </div>

    <div id="insertteam" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
      <form action="insertteam.php" method="post"> 
        <label>team_name</label><br/>
        <input type="text" name="team_name"><br/>
        <label>team_rank</label><br/>
        <input type="text" name="team_rank"><br/>
        <label>matches_played</label><br/>
        <input type="text" name="matches_played"><br/>
        <label>matches_won</label><br/>
        <input type="text" name="matches_won"><br/>
        <label>matches_lost</label><br/>
        <input type="text" name="matches_lost"><br/>
        <label>matches_tied</label><br/>
        <input type="text" name="matches_tied"><br/>
        <button type="submit" name="insert_team">insert</button><br>
      </form>
    </div>

    <div id="insertmatches" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
      <form action="insertmatches.php" method="post"> 
        <label>match_id</label><br/>
        <input type="text" name="match_id"><br/>
        <label>stadium_name</label><br/>
        <input type="text" name="stadium_name"><br/>
        <label>team_1</label><br/>
        <input type="text" name="team_1"><br/>
        <label>team_2</label><br/>
        <input type="text" name="team_2"><br/>
        <label>team_1_score</label><br/>
        <input type="text" name="team_1_score"><br/>
        <label>team_2_score</label><br/>
        <input type="text" name="team_2_score"><br/>
        <label>date_of_match</label><br/>
        <input type="text" name="date_of_match"><br/>
        <label>winning_team</label><br/>
        <input type="text" name="winning_team"><br/>
        <label>man_of_the_match</label><br/>
        <input type="text" name="man_of_the_match"><br/>
        <button type="submit" name="insert_matches">insert</button><br>
      </form>
    </div>

    <div id="insertstadium" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
      <form action="insertstadium.php" method="post"> 
        <label>stadium_name</label><br/>
        <input type="text" name="stadium_name"><br/>
        <label>stadium_place</label><br/>
        <input type="text" name="stadium_place"><br/>
        <label>stadium_country</label><br/>
        <input type="text" name="stadium_country"><br/>
        <label>stadium_capacity</label><br/>
        <input type="text" name="stadium_capacity"><br/>
        <button type="submit" name="insert_stadium">insert</button><br>
      </form>
    </div>

    <div id="insertplayer" class="w3-container w3-content w3-center w3-padding-64 inserttable" style="display:none">
      <form action="insertplayer.php" method="post"> 
        <label>player_id</label><br/>
        <input type="text" name="player_id"><br/>
        <label>player_name</label><br/>
        <input type="text" name="player_name"><br/>
        <label>team_name</label><br/>
        <input type="text" name="team_name"><br/>
        <label>player_DOB</label><br/>
        <input type="text" name="player_DOB"><br/>
        <label>player_first_match</label><br/>
        <input type="text" name="player_first_match"><br/>
        <button type="submit" name="insert_player">insert</button><br>
      </form>
    </div>

    <div id="updatebatsman" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updatebatsman.php" method="post" style="margin-top:10px"> 
        <label>batsman_id</label><br/>
        <input type="text" name="batsman_id"><br/>
        <label>matches_played</label><br/>
        <input type="text" name="matches_played"><br/>
        <label>runs_scored</label><br/>
        <input type="text" name="runs_scored"><br/>
        <label>balls_faced</label><br/>
        <input type="text" name="balls_faced"><br/>
        <button type="submit" name="update_batsman">update</button><br>
      </form>
    </div>

    <div id="updatebowler" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updatebowler.php" method="post"> 
        <label>bowler_id</label><br/>
        <input type="text" name="bowler_id"><br/>
        <label>matches_played</label><br/>
        <input type="text" name="matches_played"><br/>
        <label>runs_conceded</label><br/>
        <input type="text" name="runs_conceded"><br/>
        <label>wickets_taken</label><br/>
        <input type="text" name="wickets_taken"><br/>
        <button type="submit" name="update_bowler">update</button><br>
      </form>
    </div>

    <div id="updateteam" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updateteam.php" method="post"> 
        <label>team_name</label><br/>
        <input type="text" name="team_name"><br/>
        <label>team_rank</label><br/>
        <input type="text" name="team_rank"><br/>
        <label>matches_played</label><br/>
        <input type="text" name="matches_played"><br/>
        <label>matches_won</label><br/>
        <input type="text" name="matches_won"><br/>
        <label>matches_lost</label><br/>
        <input type="text" name="matches_lost"><br/>
        <label>matches_tied</label><br/>
        <input type="text" name="matches_tied"><br/>
        <button type="submit" name="update_team">update</button><br>
      </form>
    </div>

    <div id="updatematches" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updatematches.php" method="post"> 
        <label>match_id</label><br/>
        <input type="text" name="match_id"><br/>
        <label>stadium_name</label><br/>
        <input type="text" name="stadium_name"><br/>
        <label>team_1</label><br/>
        <input type="text" name="team_1"><br/>
        <label>team_2</label><br/>
        <input type="text" name="team_2"><br/>
        <label>team_1_score</label><br/>
        <input type="text" name="team_1_score"><br/>
        <label>team_2_score</label><br/>
        <input type="text" name="team_2_score"><br/>
        <label>date_of_match</label><br/>
        <input type="text" name="date_of_match"><br/>
        <label>winning_team</label><br/>
        <input type="text" name="winning_team"><br/>
        <label>man_of_the_match</label><br/>
        <input type="text" name="man_of_the_match"><br/>
        <button type="submit" name="update_matches">update</button><br>
      </form>
    </div>

    <div id="updatestadium" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updatestadium.php" method="post"> 
        <label>stadium_name</label><br/>
        <input type="text" name="stadium_name"><br/>
        <label>stadium_place</label><br/>
        <input type="text" name="stadium_place"><br/>
        <label>stadium_country</label><br/>
        <input type="text" name="stadium_country"><br/>
        <label>stadium_capacity</label><br/>
        <input type="text" name="stadium_capacity"><br/>
        <button type="submit" name="update_stadium">update</button><br>
      </form>
    </div>

    <div id="updateplayer" class="w3-container w3-content w3-center w3-padding-64 updatetable" style="display:none">
      <form action="updateplayer.php" method="post"> 
        <label>player_id</label><br/>
        <input type="text" name="player_id"><br/>
        <label>player_name</label><br/>
        <input type="text" name="player_name"><br/>
        <label>team_name</label><br/>
        <input type="text" name="team_name"><br/>
        <label>player_DOB</label><br/>
        <input type="text" name="player_DOB"><br/>
        <label>player_first_match</label><br/>
        <input type="text" name="player_first_match"><br/>
        <button type="submit" name="update_player">update</button><br>
        
      </form>
    </div>

    <div id="deletebatsman" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deletebatsman.php" method="post" style="margin-top:10px"> 
        <label>Enter batsman_id to delete</label><br/>
        <input type="text" name="batsman_id"><br/>
        <button type="submit" name="delete_batsman">delete</button><br>
      </form>
    </div>

     <div id="deletebowler" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deletebowler.php" method="post" style="margin-top:10px"> 
        <label>Enter bowler_id to delete</label><br/>
        <input type="text" name="bowler_id"><br/>
        <button type="submit" name="delete_bowler">delete</button><br>
      </form>
    </div>

    <div id="deleteteam" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deleteteam.php" method="post" style="margin-top:10px"> 
        <label>Enter team_name to delete</label><br/>
        <input type="text" name="team_name"><br/>
        <button type="submit" name="delete_team">delete</button><br>
      </form>
    </div>

    <div id="deletematches" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deletematches.php" method="post" style="margin-top:10px"> 
        <label>Enter match_id to delete</label><br/>
        <input type="text" name="match_id"><br/>
        <button type="submit" name="delete_matches">delete</button><br>
      </form>
    </div>

    <div id="deletestadium" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deletestadium.php" method="post" style="margin-top:10px"> 
        <label>Enter stadium_name to delete</label><br/>
        <input type="text" name="stadium_name"><br/>
        <button type="submit" name="delete_stadium">delete</button><br>

      </form>
    </div>

    <div id="deleteplayer" class="w3-container w3-content w3-center w3-padding-64 deletetable" style="display:none">
      <form action="deleteplayer.php" method="post" style="margin-top:10px"> 
        <label>Enter player_id to delete</label><br/>
        <input type="text" name="player_id"><br/>
        <button type="submit" name="delete_player">delete</button><br>
      </form>
    </div>
</div>
</div>


<script>
function openFrame(evt, operation) {
  var i, x, tablinks;
  x = document.getElementsByClassName("operation");
  y = document.getElementsByClassName("selecttable");
  z = document.getElementsByClassName("inserttable");
  a = document.getElementsByClassName("updatetable");
  b = document.getElementsByClassName("deletetable");


  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
   for (i = 0; i < y.length; i++) {
     y[i].style.display = "none";
  }
  for (i = 0; i < z.length; i++) {
     z[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
     a[i].style.display = "none";
  }
  for (i = 0; i < b.length; i++) {
     b[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(operation).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

function selectTable(tableName) {
    var i;
    var x = document.getElementsByClassName("selecttable");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(tableName).style.display = "block"; 
}


function insertTable(tableName) {
    var i;
    var x = document.getElementsByClassName("inserttable");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(tableName).style.display = "block"; 
}

function updateTable(tableName) {
    var i;
    var x = document.getElementsByClassName("updatetable");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(tableName).style.display = "block"; 
}

function deleteTable(tableName) {
    var i;
    var x = document.getElementsByClassName("deletetable");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(tableName).style.display = "block"; 
}
</script>

</body>
</html>