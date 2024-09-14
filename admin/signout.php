<?php
include 'connection.php';
    session_start();
    if (isset($_SESSION['studentid'])) {
    $studentid = $_SESSION['studentid'];
    }else {
    echo "<script>window.open('index', '_self')</script>";
    }



session_destroy();
echo "<script> window.open('index.php', '_self')</script>";

?>
