<?php
include 'connection.php';
session_start();
if (isset($_SESSION['accountid'])) {
  $accountid = $_SESSION['accountid'];
}else {
  echo "<script>window.open('index', '_self')</script>";
}

  $accountINFOR = $conn->query("SELECT * FROM accounts WHERE account_id='".$accountid."' ") or die($conn->error);
    while ($row = $accountINFOR->fetch_assoc()) {
    $schName = $row['schName'];
    $schCategory = $row['schCategory'];
    $schMoto = $row['schMoto'];
    $schEmail = $row['schEmail'];
    $schPhone = $row['schPhone'];
    $schAddress = $row['schAddress'];
    $schCity = $row['schCity'];
    $schCountry = $row['schCountry'];
    $schWebsite = $row['schWebsite'];
    $status = $row['status'];
	}
	$studentsAll = $conn->query("SELECT * FROM students WHERE status=1 ") or die($conn->error);
  $facultyAll = $conn->query("SELECT * FROM faculties WHERE status=1 ") or die($conn->error);
  $depsAll = $conn->query("SELECT * FROM departments WHERE status=1 ") or die($conn->error);
  $coursesAll = $conn->query("SELECT * FROM courses WHERE status=1 ") or die($conn->error);
  $requestsAll = $conn->query("SELECT * FROM requests WHERE status is not null ") or die($conn->error);
?>