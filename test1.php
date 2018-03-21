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

   $query =<<<EOF
      SELECT * from players;
EOF;

   $result = pg_query($connection, $query);
   if(!$result) {
      echo pg_last_error(connection);
      exit;
   } 
   while($row = pg_fetch_row($result)) {
      echo "Username = ". $row[0] . "\n";
      echo "Password = ". $row[1] ."\n";
      
   }
   
$conn->close();

?>