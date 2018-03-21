<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
</style>
<body>
<div class="w3-panel w3-padding-64 w3-teal w3-display-topmiddle " style="min-width:400px">
	<?php
           
          DEFINE('DB_USERNAME', 'root');
          DEFINE('DB_PASSWORD', 'root');
          DEFINE('DB_HOST', 'localhost');
          DEFINE('DB_DATABASE', 'DBD_Project');

          $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE); if(isset($_POST['insert_team']));
            {
              $sql = "INSERT INTO  team (team_name, team_rank, matches_played, matches_won, matches_lost, matches_tied)
              VALUES ('".$_POST["team_name"]."','".$_POST["team_rank"]."','".$_POST["matches_played"]."','".$_POST["matches_won"]."','".$_POST["matches_lost"]."','".$_POST["matches_tied"]."')";

              if (mysqli_query($conn, $sql)) {
                  echo "Query executed successfully";
              } else {
                echo "Error executing query: " . mysqli_error($conn);
              }
             }
    ?>

          <a class="w3-display-bottommiddle w3-text-yellow" href="login.php">back to admin page</a>

</div>
</body>
</html>

