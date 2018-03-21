<?php

mysql_connect('localhost','root','root');
mysql_select_db('DBD_Project');


$sql = "Select batsman_name from batsman";
$result = mysql_query($sql);

echo "<select name = 'name'>";
while ($row = mysql_fetch_array($result)){
echo "<option value='" . $row['batsman_name'] . "'>". $row['batsman_name'] . "</option>";
}

echo "</select>";
?>