<html>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
</head>
<body>

<?php

if(isset($_POST['submit'])) {
	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'DBD_Project');

	$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	$query = $_POST['content'];


	if (mysqli_query($conn, $query)) {
    echo "Query executed successfully";
	} else {
    echo "Error executing query: " . mysqli_error($conn);
	}

	

	}
?>

<form class="w3-container" method="post" action="<?php $_PHP_SELF ?>">

    <p> Query :<input name="content" required id="content" /></p>
    <button class="login-button" type="submit" name="submit">Submit Query</button>

</form>



</body>
</html>