<?php
$server = "localhost";
$userName = "root";
$password = "password";
$dbname = "BeastWebsite";

$conn = new mysqli($server, $userName, $password, $dbname);
if (!$conn) {
	echo $conn->connect_error;
}
