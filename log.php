<?php 
include 'connection.php';
session_start();
// sign up
if(isset($_POST['signup'])){
  $reg = $_POST['reg'];
  $fname = filter_input(INPUT_POST, 'fname');
  $lname = filter_input(INPUT_POST, 'lname');
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $status =1;
  // check if data exist
  $checkReg = $conn->query("SELECT * FROM students WHERE regnum='".$reg."' ");
  $checkEmail = $conn->query("SELECT * FROM students WHERE email='".$email."' ");
  if(mysqli_num_rows($checkReg) == 0 AND mysqli_num_rows($checkEmail) == 0){ 
    $query = $conn->query("INSERT INTO students (regnum, fname, lname, email, password, status) VALUE('$reg', '$fname', '$lname', '$email', '$password', '$status')") OR die($conn->error);
    if ($query) {
      $_SESSION['studentid'] = $conn->insert_id;
      // alert message
      $_SESSION['msg'] = 'Account created successfully. Please complete your profile';
      echo "<script> window.open('profile', '_self')</script>";
    }else{
      // alert message
      $_SESSION['msg'] = 'There is problem. Try again later';
      echo "<script> window.open('signup', '_self')</script>";
    }
  }else{
    // alert message
    $_SESSION['msg'] = 'The registeration number & email already exist';
    echo "<script> window.open('signup', '_self')</script>";
  }
   
}

// Sign in
if(isset($_POST['signin'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

    // Retrieve user data from database based on email
    $sql = "SELECT student_id, password FROM students WHERE email = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['studentid'] = $row['student_id'];

            // Redirect to home page
            header("Location: home");
        } else {
            $_SESSION['msg'] = "Invalid password.";
            // Redirect back
            header("Location: index");
        }
    } else {
        $_SESSION['msg'] = "No account found with that email.";
        // Redirect back
        header("Location: index");
    }
}

?>