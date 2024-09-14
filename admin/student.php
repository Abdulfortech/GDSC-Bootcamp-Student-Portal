<?php include 'auth.php';
if($_GET){
    $studentid = $_GET['id'];
}elseif (isset($_POST['id'])) {
    $studentid = $_POST['id'];
}else{
    // echo "<script> window.open('users', '_self')</script>";
    header("Location:articles");
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
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Mobilizing App - Students</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="../vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="../vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php';?>
	<!-- Header container -->
	<div class="px-4 py-5 my-5 text-center">
	<div class="col-lg-6 mx-auto">
            <div class="card bg-light p-2">
                <i class="fa fa-user-circle text-muted" style="font-size: 100px"></i>
                <div class="row mt-4">
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Firstname: </b> <?php echo $fname; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Lastname: </b> <?php echo $fname; ?>
                        </li>
                      </ol>
					</div>
					<div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Date of Birth: </b> <?php echo $dob; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Gender: </b> <?php echo $gender; ?>
                        </li>
                      </ol>
					</div>
					<div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>State: </b> <?php echo $state; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>L.G.A. : </b> <?php echo $lga; ?>
                        </li>
                      </ol>
					</div>
					<div class="col-md-12">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Address: </b> <?php echo $address; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-5">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Phone: </b> <?php echo $phone; ?>
                        </li>
                      </ol>
					</div>
					<div class="col-md-7">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Email: </b> <?php echo $email; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Metric Number: </b> <?php echo $reg; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Level: </b> <?php echo $level; ?>
                        </li>
                      </ol>
					</div>
					<div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Faculty: </b> <?php echo $faculty; ?>
                        </li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <ol class="breadcrumb border rounded">
                        <li class="breadcrumb-item p-2">
                          <b>Department: </b> <?php echo $dep; ?>
                        </li>
                      </ol>
                    </div>
                </div>
            </div>
		</div>
	</div>
</main>

<!--Footer-->
    <?php include 'footer.php';?>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendor/Bootstrap/js/bootstrap.bundle.min.js"></script> 
    <!-- <script src="../vendor/Bootstrap/js/bootstrap.min.js"></script>   -->
<!-- overlayScrollbars -->
<script src="../vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

      
  </body>
</html>
