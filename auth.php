<?php
include 'connection.php';
session_start();
if (isset($_SESSION['studentid'])) {
  $studentid = $_SESSION['studentid'];
}else {
  echo "<script>window.open('index', '_self')</script>";
}

  $studentINFOR = $conn->query("SELECT * FROM students WHERE student_id='".$studentid."' ") or die($conn->error);
    while ($row = $studentINFOR->fetch_assoc()) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $name = $fname ." ". $lname;
    $dob = $row['dob'];
    $gender = $row['gender'];
    $lga = $row['lga'];
    $state = $row['state'];
    $address = $row['address'];
    $phone = $row['phone'];
    $email = $row['email'];
    $reg = $row['regnum'];
    $dep = $row['department'];
    $faculty = $row['faculty'];
    $level = $row['level'];
    $status = $row['status'];
    $profilePicture = $row['picture'];
    }
?>