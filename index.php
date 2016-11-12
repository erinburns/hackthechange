<!DOCTYPE html>
<html>
<body>

<?php
$dbconn = pg_connect("dbname=d79k6qah91reah");
//connect to a database named "mary"

$dbconn2 = pg_connect("host=ec2-54-75-232-56.eu-west-1.compute.amazonaws.com port=5432 dbname=mary");
// connect to a database named "mary" on "localhost" at port "5432"

$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
//connect to a database named "mary" on the host "sheep" with a username and password

$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password

$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
?>

<button onclick="openWin()">Open w3schools.com in a new window</button>
<button onclick="closeWin()">Close the new window (w3schools.com)</button>

<script>
var myWindow;

function openWin() {
    myWindow = window.open("http://www.w3schools.com", "_blank", "width=500, height=500");
}

function closeWin() {
    myWindow.close();
}
</script>

</body>
</html>

