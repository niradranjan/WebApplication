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
session_start(); 
session_destroy();
?>
<p class="w3-display-middle w3-text-yellow">You have logged out</p>
<a class="w3-display-bottommiddle w3-text-yellow" href="index.php">back to login page</a>

</div>
</body>
</html>
