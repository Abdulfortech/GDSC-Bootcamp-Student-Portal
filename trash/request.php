<?php 
    include 'auth.php';
    // check if applied before
    $checkRequest = $conn->query("SELECT * FROM requests WHERE student_id='".$studentid."' and status=1 ");
    if(mysqli_num_rows($checkRequest) > 0){ 
        $_SESSION['msg'] = 'You already sent a request.';
        echo "<script> window.open('home', '_self')</script>";
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @Abdulfortech">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Student Mobilizing App | Request Mobilization</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
    <link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="admin/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="admin/vendor/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
    <?php include 'navbar.php';?>
    <section class="farko p-3 mt-5">
      <center>
        <div class="col-md-6">              
            <div class="container text-center mt-5 page-card">
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Request Mobilization</span></h1>
                <form method="POST" action="process.php">
                    <input type="text" value="<?= $studentid?>" name="id" hidden>
                    <div class="form-group text-start">
                        <label for="floatingInput">Registration No.</label>
                        <input type="text" class="form-control" name="reg" value="<?= $reg ?>" readonly>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-6">
                            <label for="floatingInput">First Name</label>
                            <input type="text" class="form-control" name="fname" value="<?= $fname ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="<?= $lname ?>" required>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-4">
                            <label for="floatingInput">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="<?= $dob ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput"> Gender</label>
                            <select class="form-control" name="gender" required>
                                <option selected value="">Choose..</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput">Marital Status</label>
                            <select class="form-control" name="marital" required>
                                <option selected value="">Choose..</option>
                                <option>Married</option>
                                <option>Single</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-6">
                            <label for="floatingInput">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="<?= $phone ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">State of Origin</label>
                            <select class="form-control" name="state" required>
                                <option selected value="">Choose..</option>
                                <?php include 'state-list.php';?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <label for="floatingInput">Course of Study</label>
                        <input type="text" class="form-control" name="course" required>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-6">
                            <label for="floatingInput">Class of Degree</label>
                            <input type="text" class="form-control" name="class" required>
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">Date of Graduation</label>
                            <input type="date" class="form-control" name="gdate" required>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-6">
                            <label for="floatingInput">Jamb Reg. No.</label>
                            <input type="text" class="form-control" name="jambrn" required>
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">Current Jamb Reg. No.</label>
                            <input type="text" class="form-control" name="cjambrn" required>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-6">
                            <label for="floatingInput"> Have you served before?</label>
                            <select class="form-control" name="serve" required>
                                <option selected value="">Choose..</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-6>
                            <label for="floatingInput">Militry Personnel?</label>
                            <select class="form-control" name="militry" required>
                                <option selected value="">Choose..</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <button class=" btn btn-lg btn-success mt-4" type="submit" name="request">Submit</button>
                </form>


            </div>
        </div>
      </center>
    </section>
  </main>

<!--Footer-->

<!--Footer-->
   <?php include 'footer.php';?>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/js/bootstrap.min.js"></script>  
<!-- lga plugin -->
<script src="vendor/lga/lga.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
  <script type="text/javascript">
      $(document).ready(function() {
          $.notify({
          title: "<b>Alert :</b>",
          message: "<?= $msg?>",
          icon: 'fa fa-bell',
          type: "info"
          });
      });
  </script>
  <?php  unset($_SESSION['msg']); }?>
    <!-- DataTables -->
    <script src="admin/vendor/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/vendor/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin/vendor/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
        });
    </script>

      
  </body>
</html>
