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
	<title>Student Portal App | Profile Picture</title>
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
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Update Profile Picture</h1>
            <center>
                <?php
                    if(isset($profilePicture)){
                ?>
                    <img src="<?= $profilePicture ?>" class="profile-picture" style="width: 130px; height: 130px; border-radius: 100%;" alt="">
                <?php }else {?>
                    <i class="fa fa-user-circle text-muted" style="font-size: 150px"></i>
                <?php }?>
            </center>
                <form method="POST" action="process.php" enctype="multipart/form-data">
                    <input type="text" value="<?= $studentid?>" name="studentid" hidden>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="floatingInput">Picture</label>
                                <input type="file" class="form-control" name="picture" required>
                            </div>
                        </div>
                    </div>
                    

                    <button class=" btn btn-lg btn-success mt-4" type="submit" name="profilePicture">Save</button>
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
