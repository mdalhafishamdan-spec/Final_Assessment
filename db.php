<?php

$hostname = "localhost"; //127.0.0.0
$username = "root";
$password = "";
$dbname = "student_grading";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

?>