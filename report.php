<!DOCTYPE html>
<html>
<?php

$conn_string = "host=ec2-54-75-232-56.eu-west-1.compute.amazonaws.com port=5432 dbname=d79k6qah91reah user=nzykuikwyckbwj password=JOehPTGGD1x8nLXmN71kD1rxgy";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password


$sql="CREATE TABLE users (
id varchar(5),
name varchar(20), 
middle varchar(20),
last varchar(20),
address varchar(50),
expir date,
pass varchar(20),
PRIMARY KEY(id)
)";



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

