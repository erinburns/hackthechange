<?php
$username = "root";
$password = "new-password";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password, "enablers");
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>