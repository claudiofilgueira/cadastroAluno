<?php
$servername = "localhost";
$database = "cadaluno";
$username = "claudiofil";
$password = "D4m}N9\SCEeH2mji";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";

?>