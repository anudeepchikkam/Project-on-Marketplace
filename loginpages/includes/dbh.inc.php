<?php
//Connection to the database, please change the value if your server is different
$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "contadel";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
} else {
    echo("connection succeed");
}
?>
