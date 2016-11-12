<!DOCTYPE html>
<html>
<body>
<?php
$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
); ?>

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

