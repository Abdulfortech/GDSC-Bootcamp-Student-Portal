<?php 
include 'connection.php';
session_start();

// Sign in
if(isset($_POST['signin'])){
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  // Searching through database
  $query = $conn->query("SELECT * FROM accounts WHERE schEmail='".$email."' and password='".$pass."' and status='1'");
  // if the record exist
  $result = mysqli_num_rows($query);
  if($result === 1) {
    // fetching account id
    while($row = $query->fetch_assoc()){
      $accountid = $row['account_id'];
    }
    // preparing data for login
    $_SESSION['accountid'] = $accountid;
    echo "<script>window.open('home', '_self')</script>";
  }else{

    $_SESSION['msg'] = 'There is problem try again later.';
    echo "<script>window.open('index', '_self')</script>";
  }

}

// add student
// if(isset($_POST['addStudent'])){
//   $reg = $_POST['reg'];
//   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
//   $dep = $_POST['dep'];
//   $status =1;

//   $conn->query("INSERT INTO students (regnum, name, department, status) VALUE('$reg', '$name', '$dep', '$status')") OR die($conn->error);
//   echo "<script> window.open('students', '_self')</script>";
// }else{

// }

// add SESSEION
if(isset($_POST['addSession'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $status =1;

  $conn->query("INSERT INTO sessions (title, status) VALUE('$name', '$status')") OR die($conn->error);
  $_SESSION['msg'] = 'You add new session successfully.';
  echo "<script> window.open('sessions', '_self')</script>";
}

// edit session
if(isset($_POST['editSession'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $query = $conn->query("UPDATE sessions SET title='$title' WHERE session_id='".$id."'") OR die($conn->error);
  $_SESSION['msg'] = 'You update session successfully.';
  echo "<script> window.open('sessions', '_self')</script>";
}

// add class
if(isset($_POST['addClass'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = $_POST['code'];
  $status =1;

  $conn->query("INSERT INTO classes (title, code, status) VALUE('$name', '$code', '$status')") OR die($conn->error);
  $_SESSION['msg'] = 'You add new class successfully.';
  echo "<script> window.open('classes', '_self')</script>";
}

// edit faculty
if(isset($_POST['editClass'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = htmlentities($_POST['code']);
  $query = $conn->query("UPDATE classes SET title='$title', code='$code' WHERE class_id='".$id."'") OR die($conn->error);
  $_SESSION['msg'] = 'You update class successfully.';
  echo "<script> window.open('classes', '_self')</script>";
}

// edit faculty
if(isset($_POST['editFaculty'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = htmlentities($_POST['code']);
  $query = $conn->query("UPDATE faculties SET facultyTitle='$title', facultyCode='$code' WHERE faculty_id='".$id."'") OR die($conn->error);
  $_SESSION['msg'] = 'You update faculty successfully.';
  echo "<script> window.open('faculties', '_self')</script>";
}


// add course
if(isset($_POST['addCourse'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = $_POST['code'];
  $status =1;

  $conn->query("INSERT INTO courses (title, code, status) VALUE('$name', '$code', '$status')") OR die($conn->error);

  $_SESSION['msg'] = 'You add course successfully.';
  echo "<script> window.open('courses', '_self')</script>";
}

// edit course
if(isset($_POST['editCourse'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = htmlentities($_POST['code']);
  $query = $conn->query("UPDATE courses SET title='$title', code='$code' WHERE course_id='".$id."'") OR die($conn->error);

  $_SESSION['msg'] = 'You update course successfully.';
  echo "<script> window.open('courses', '_self')</script>";
}else{

}

// add faculty
if(isset($_POST['addFaculty'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = $_POST['code'];
  $status =1;

  $conn->query("INSERT INTO faculties (facultyTitle, facultyCode, status) VALUE('$name', '$code', '$status')") OR die($conn->error);
  $_SESSION['msg'] = 'You add new faculty successfully.';
  echo "<script> window.open('faculties', '_self')</script>";
}

// edit faculty
if(isset($_POST['editFaculty'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = htmlentities($_POST['code']);
  $query = $conn->query("UPDATE faculties SET facultyTitle='$title', facultyCode='$code' WHERE faculty_id='".$id."'") OR die($conn->error);
  $_SESSION['msg'] = 'You update faculty successfully.';
  echo "<script> window.open('faculties', '_self')</script>";
}

// add department
if(isset($_POST['addDepartment'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = $_POST['code'];
  $status =1;

  $conn->query("INSERT INTO departments (title, code, status) VALUE('$name', '$code', '$status')") OR die($conn->error);
  $_SESSION['msg'] = 'You add new department successfully.';
  echo "<script> window.open('departments', '_self')</script>";
}

// edit department
if(isset($_POST['editDepartment'])){
  $id = $_POST['id'];
  $title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $code = htmlentities($_POST['code']);
  $query = $conn->query("UPDATE departments SET title='$title', code='$code' WHERE department_id='".$id."'") OR die($conn->error);

  $_SESSION['msg'] = 'You update department successfully.';
  echo "<script> window.open('departments', '_self')</script>";
}

// edit School information
if(isset($_POST['editSchool'])){
  $id = $_POST['id'];
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $moto = htmlentities($_POST['moto']);
  $category = htmlentities($_POST['category']);
  $email = htmlentities($_POST['email']);
  $phone = htmlentities($_POST['phone']);
  $address = htmlentities($_POST['address']);
  $city = htmlentities($_POST['city']);
  $country = htmlentities($_POST['country']);
  $website = htmlentities($_POST['website']);
  // var_dump($id);
  $query = $conn->query("UPDATE accounts SET schName='$name', schMoto='$moto', schCategory='$category', schEmail='$email', schPhone='$phone', schAddress='$address', schCity='$city', schCountry='$country', schWebsite='$website' WHERE account_id='".$id."'") OR die($conn->error);
  // if ($query) {
  //   echo 'success';
  // }else{
  //   echo 'fail';
  // }
  $_SESSION['msg'] = 'You update school successfully.';
  echo "<script> window.open('school', '_self')</script>";
}

if(!empty($_GET['action'])){
  switch ($_GET['action']) {
    // students
    case 'DeleteStudent':
        $id = $_GET['id']; $status = 'Null';
        $column = 'student_id'; $table = 'students';
        $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
        $_SESSION['msg'] = 'The student has been deleted successfully.';
        header("Location:students");
        break;
    // sessions
    case 'DeleteSession':
      $id = $_GET['id']; $status = 'Null';
      $column = 'session_id'; $table = 'sessions';
      $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
      $_SESSION['msg'] = 'The session has been deleted successfully.';
      header("Location:sessions");
      break;
    // classes
    case 'DeleteClass':
      $id = $_GET['id']; $status = 'Null';
      $column = 'class_id'; $table = 'classes';
      $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
      $_SESSION['msg'] = 'The classes has been deleted successfully.';
      header("Location:classes");
      break;
    // courses
    case 'DeleteCourse':
      $id = $_GET['id']; $status = 'Null';
      $column = 'course_id'; $table = 'courses';
      $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
      $_SESSION['msg'] = 'The courses has been deleted successfully.';
      header("Location:courses");
      break;
    // faculties
    case 'DeleteFaculty':
      $id = $_GET['id']; $status = 'Null';
      $column = 'faculty_id'; $table = 'faculties';
      $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
      $_SESSION['msg'] = 'The faculty has been deleted successfully.';
      header("Location:faculties");
      break;
    // courses
    case 'DeleteDepartment':
      $id = $_GET['id']; $status = 'Null';
      $column = 'department_id'; $table = 'departments';
      $process = $conn->query("DELETE FROM $table WHERE $column='".$id."'") or die($conn->error);
      $_SESSION['msg'] = 'The department has been deleted successfully.';
      header("Location:departments");
      break;
    // requests
    case 'ReviewRequest':
        $id = $_GET['id']; $status = '2';
        $column = 'request_id'; $table = 'requests';
        $process = $conn->query("UPDATE $table SET status=$status WHERE $column='".$id."'") or die($conn->error);
        $_SESSION['msg'] = 'The request has been updated successfully.';
        header("Location:requests");
        break;
    case 'ApproveRequest':
        $id = $_GET['id']; $status = '3';
        $column = 'request_id'; $table = 'requests';
        $process = $conn->query("UPDATE $table SET status=$status WHERE $column='".$id."'") or die($conn->error);
        $_SESSION['msg'] = 'The request has been updated successfully.';
        header("Location:requests");
        break;
    case 'RejectRequest':
        $id = $_GET['id']; $status = '4';
        $column = 'request_id'; $table = 'requests';
        $process = $conn->query("UPDATE $table SET status=$status WHERE $column='".$id."'") or die($conn->error);
        $_SESSION['msg'] = 'The request has been updated successfully.';
        header("Location:requests");
        break;
  }
}
?>