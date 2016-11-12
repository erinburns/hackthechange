<!DOCTYPE html>
<html>
<?php
$dbconn = pg_connect("dbname=mary");
//connect to a database named "mary"

$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
// connect to a database named "mary" on "localhost" at port "5432"

$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
//connect to a database named "mary" on the host "sheep" with a username and password

$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password

?>


<head></head>


<body>



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

