<?php 
include 'auth.php';

// update profile
if(isset($_POST['editProfile'])){
  
  $id = $_POST['id'];
  $fname = filter_input(INPUT_POST, 'fname');
  $lname = filter_input(INPUT_POST, 'lname');
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $lga = $_POST['lga'];
  $state = $_POST['state'];
  $address = $_POST['address'];
  $level = $_POST['level'];
  $faculty = $_POST['faculty'];
  $department = $_POST['department'];

  $query = $conn->query("UPDATE students SET fname='$fname', lname='$lname', dob='$dob', gender='$gender', phone='$phone', lga='$lga', state='$state', address='$address', level='$level', faculty='$faculty', department='$department' WHERE student_id='".$id."'") OR die($conn->error);
  $_SESSION['msg'] = 'Your profile has been updated.';
echo "<script> window.open('home', '_self')</script>";
}

// add gallery
if (isset($_POST['addGallery'])) {
    $studentid = $_POST['studentid'];
    $description = $conn->real_escape_string($_POST['description']);

    // File upload handling
    $targetDir = "uploads/"; // Directory where files will be uploaded
    $fileName = basename($_FILES["picture"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); // Get the file extension

    // Generate a unique file name to avoid overwriting existing files
    $newFileName = uniqid() . '.' . $fileType; // Generate unique ID and append the extension
    $targetFilePath = $targetDir . $newFileName;

    // Check if file was uploaded and is a valid image
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowedTypes)) {
        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath)) {
            // Insert file path and description into the database
            $sql = "INSERT INTO gallery (student_id, picture, description) VALUES ('$studentid', '$targetFilePath', '$description')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['msg'] = "Picture successfully added to the gallery!";
            } else {
                $_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $_SESSION['msg'] = "There was an error uploading the file.";
        }
    } else {
        $_SESSION['msg'] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
    echo "<script> window.open('gallery', '_self')</script>";
}

// update profile picture
if (isset($_POST['profilePicture'])) {
  $studentid = $_POST['studentid'];

  // File upload handling
  $targetDir = "uploads/profile/"; // Directory where files will be uploaded
  $fileName = basename($_FILES["picture"]["name"]);
  $fileType = pathinfo($fileName, PATHINFO_EXTENSION); // Get the file extension

  // Generate a unique file name to avoid overwriting existing files
  $newFileName = uniqid() . '.' . $fileType; // Generate unique ID and append the extension
  $targetFilePath = $targetDir . $newFileName;

  // Check if file was uploaded and is a valid image
  $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
  if (in_array($fileType, $allowedTypes)) {
      // Move uploaded file to target directory
      if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath)) {
          // Insert file path and description into the database
          $query = $conn->query("UPDATE students SET picture='$targetFilePath' WHERE student_id='".$studentid."'") OR die($conn->error);
          if ($query) {
              $_SESSION['msg'] = "Picture successfully updated!";
          } else {
              $_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;
          }
      } else {
          $_SESSION['msg'] = "There was an error uploading the file.";
      }
  } else {
      $_SESSION['msg'] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
  }
  echo "<script> window.open('profile-picture', '_self')</script>";
}

// password
if (isset($_POST['password'])) {
  // Get form inputs
  $studentid = $_POST['studentid'];
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  // Fetch the current password from the database
  $sql = "SELECT password FROM students WHERE student_id = '$studentid'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $hashed_password = $row['password']; // The hashed password from the database

      // Verify the current password
      if (password_verify($current_password, $hashed_password)) {
          // Check if new password and confirm password match
          if ($new_password === $confirm_password) {
              // Hash the new password
              $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

              // Update the password in the database
              $update_sql = "UPDATE students SET password = '$new_hashed_password' WHERE student_id = '$studentid'";
              
              if ($conn->query($update_sql) === TRUE) {
                  $_SESSION['msg'] = "Password updated successfully!";
              } else {
                  $_SESSION['msg'] = "Error updating password: " . $conn->error;
              }
          } else {
              $_SESSION['msg'] = "New password and confirm password do not match.";
          }
      } else {
          $_SESSION['msg'] = "Current password is incorrect.";
      }
  } else {
    $_SESSION['msg'] = "User not found.";
  }
  
  echo "<script> window.open('password', '_self')</script>";
}

?>