<?php
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'DBD_Project');

  $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = $_POST['usrname'];
      $mypassword = $_POST['psw'];

      $sql = "SELECT * FROM admin_creds WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      if($count == 1) {
         header("location: login.php");
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
      }
      else {
         //$error = "Your Login Name or Password is invalid"
          header("Location: index.php?error=WrongCombinationofUserNameandPassword!");
      }
   }
?>