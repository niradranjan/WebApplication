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

echo "Connected successfully";
$conn->close();
?>