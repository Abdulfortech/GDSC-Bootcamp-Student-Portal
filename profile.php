<?php include 'auth.php';?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @Abdulfortech">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Student Portal App | Student Profile</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
    <?php include 'navbar.php';?> 
	<!-- Section -->
	<section class="farko p-3 mt-5">
      <center>
        <div class="col-md-6">              
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">My Profile</h1>
                <form method="POST" action="process.php">
                    <input type="text" value="<?= $studentid?>" name="id" hidden>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="floatingInput">First Name</label>
                                <input type="text" class="form-control" value="<?= $fname?>" name="fname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Last Name</label>
                                <input type="text" class="form-control" value="<?= $lname?>" name="lname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="floatingInput">Date of Birth</label>
                                <input type="date" class="form-control" value="<?= $dob?>" name="dob">
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Gender</label>
                                <select class="form-control" name="gender">
                                    <option><?= $gender?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                              <label>State*</label>
                              <select   onchange="toggleLGA(this);" id="state" class="form-control" name="state">
                                <option><?= $state?></option>
                                <?php include 'state-list.php';?>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label>Local Goverment Area*</label>
                              <select id="lga" class="form-control select-lga" name="lga"  required>
                                <option><?= $lga?></option>
                              </select>
                            </div>
                            <div class="col-md-12">
                                <label for="Name">Address*</label>
                                <input class="form-control" id="address" type="text" value="<?= $address?>" name="address" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="floatingInput">Reg. Number</label>
                                <input type="text" class="form-control" value="<?= $reg?>" name="reg" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Class(Level)</label>
                                <input class="form-control" type="text" value="<?= $level?>" name="level" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="floatingInput">Faculty</label>
                                <input class="form-control" type="text" value="<?= $faculty?>" name="faculty" required>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Department</label>
                                <input class="form-control" type="text" value="<?= $dep?>" name="department" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="floatingInput">Phone Number</label>
                                <input type="number" class="form-control" value="<?= $phone?>" name="phone" required>
                            </div>
                            <div class="col-md-7">
                                <label for="floatingInput">Email</label>
                                <input type="email" class="form-control" value="<?= $email?>" name="email" readonly>
                            </div>
                        </div>
                    </div>
                    

                    <button class=" btn btn-lg btn-success mt-4" type="submit" name="editProfile">Save</button>
                </form>
            </div>
        </div>
      </center>
	</section>
	<!-- PROJECT HIRING -->
  </main>

<!--Footer-->
  <?php include 'footer.php';?>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/Bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>  
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
      
  </body>
</html>
