<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBD_Project";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

 
echo "<form action='dates.php' method='post'>";

echo "<input type='date' name='dates1'>";

echo "<input type='date' name='dates2'>";
echo "<input type='submit' value='Submit'>";

echo "</form>";


$conn->close();
?>