<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//include connection.php;

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "enablers";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE reports (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
message text,
attachmenturl text,
reg_date TIMESTAMP
)";

if ($link->query($sql) === TRUE) {
    //echo "Table MyGuests created successfully";
} else {
    //echo "Error creating table: " . $conn->error;
}

// $conn->close();


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$message = mysqli_real_escape_string($link, $_POST['message']);
 
// attempt insert query execution
$sql = "INSERT INTO reports (message) VALUES ('$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
