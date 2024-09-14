<?php
$servername = "localhost";
// local server
// $username = "root";
// $password = "";
// $dbname = "student_portal";

// online server
$username = "u371301739_student_portal";
$password = "DB@student_portal1";
$dbname = "u371301739_student_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

?>
