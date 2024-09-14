<?php include 'auth.php';
if($_GET){
    $requestid = $_GET['id'];
}elseif (isset($_POST['id'])) {
    $requestid = $_POST['id'];
}else{
    // echo "<script> window.open('users', '_self')</script>";
    header("Location:requests");
}
  $requestINFOR = $conn->query("SELECT * FROM requests WHERE request_id='".$requestid."' ") or die($conn->error);
    while ($row = $requestINFOR->fetch_assoc()) {
        $reg = $row['reg'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $marital = $row['marital'];
        $phone = $row['phone'];
        $state = $row['state'];
        $course = $row['course'];
        $class = $row['class'];
        $gdate = $row['gdate'];
        $jamb = $row['jamb'];
        $cjamb = $row['cjamb'];
        $serve = $row['serve'];
        $militry = $row['militry'];
        $status = $row['status'];
        $createdAt = $row['created_at'];
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
	<title>Mobilizing App - Request information</title>
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
                <div class="col-md-5">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Date of Birth: </b> <?php echo $dob; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-3">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Gender : </b> <?php echo $gender; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-4">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Marital Status: </b> <?php echo $marital; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Phone Number: </b> <?php echo $phone; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>State of Origin: </b> <?php echo $state; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-12">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Registration Number : </b> <?php echo $reg; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-12">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Course: </b> <?php echo $course; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Class: </b> <?php echo $class; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Graduation Date: </b> <?php echo $gdate; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>JAMB No. : </b> <?php echo $jamb; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Current JAMB No. : </b> <?php echo $cjamb; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Served Before: </b> <?php echo $serve; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Militry Personel: </b> <?php echo $militry; ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Status : </b> 
                      <?php 
                          if ($status == 1) {echo '<span class="badge bg-primary badge-pill">Active</span>';}
                          elseif($status == 2) {echo '<span class="badge bg-info badge-pill">Reviewing</span>';}
                          elseif($status == 3) {echo '<span class="badge bg-success badge-pill">Approved</span>';}
                          else{echo '<span class="badge bg-danger badge-pill">Rejected</span>';}
                      ?>
                    </li>
                  </ol>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb border rounded">
                    <li class="breadcrumb-item p-2">
                      <b>Submitted at: </b> <?php echo substr($createdAt,0,10); ?>
                    </li>
                  </ol>
                </div>
            </div>

            <center>
              <a href="process?action=ReviewRequest&id=<?= $requestid ?>" class="btn btn-primary">Reviewing</a>
              <a href="process?action=ApproveRequest&id=<?= $requestid ?>" class="btn btn-success">Approve</a>
              <a href="process?action=RejectRequest&id=<?= $requestid ?>" class="btn btn-danger">Reject</a>
            </center>
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
