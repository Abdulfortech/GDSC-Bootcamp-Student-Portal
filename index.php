<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu">
	<meta name="twitter handle" content="Abdulfortech">
	<title>Student Portal App | Sign Up</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
  <!-- Bootstrap core CSS -->
  <link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- fontawesome -->
  <link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="">
  <main> 
    <center>
        <h2 class="text-center text-success fw-bold mt-5">Student Portal App</h2>
      <div class="col-md-3 py-5">
          <div class="card bg-light card-success p-3">
            <center><i class="fa fa-user-circle text-success" style="font-size: 80px;"></i></center>
            <h3 class="text-success text-center font-weight-bold">Student Sign In</h3>
            <form role="form" method="POST" action="log.php" id="quickForm">
              <div class="card-body text-start p-2">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="username" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>  
                <center><input type="submit" name="signin" class="btn btn-success mt-4 mb-3" value="Sign In"></center>
                <p class="text-center text-success">
                  Don't have account? <a href="signup">Sign Up</a> <br> 
                  Forget Password ? <a href="reset">Reset</a>
                </p>
              </div>
            </form>
          </div>
      </div>
    </center>
  </main>

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/js/bootstrap.min.js"></script> 
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php session_start(); if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
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
