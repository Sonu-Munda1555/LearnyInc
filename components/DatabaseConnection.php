<?php
$server = "localhost";
$username = "root";
$DB = "learnyinc";

$conn = mysqli_connect($server, $username, "", $DB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    
}
?>