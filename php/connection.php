<?php
$server = "localhost";
$userName = "root";
$password = "";
$dbname = "beastmain";

$conn = new mysqli($server,$userName,$password,$dbname);
if(!$conn){
	echo $conn -> connect_error;
}
