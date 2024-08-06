<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CRUD_ASSIGN";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
