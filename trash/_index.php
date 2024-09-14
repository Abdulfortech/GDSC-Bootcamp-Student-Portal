<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>NMS - Sign In</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form method="POST" action="process.php">
        <img class="mb-4 rounded-circle" src="img/photo4.jpg" alt="" width="100" height="100">
        <h1 class="h1 mb-3 fw-bold text-primary">NMS</h1>
        <h3 class="mb-3 fw-bold text-primary"><u>Student Login</u></h3>
        <div class="form-floating mb-1">
          <input type="text" class="form-control" id="floatingInput" name="reg">
          <label for="floatingInput">Metric Number</label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" class="form-control" id="floatingInput" name="password">
          <label for="floatingInput">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign In</button>
        <p class="mt-3">Don't have account?<a href="register">Register</a></p>
        <p class="mt-3"> Admin account? <a href="admin/index">Sign In</a></p>
        <p class="mt-4 mb-3 text-muted">&copy; <?= date("Y")?> <a href="https://smaps.sgr.com.ng">SMAPS</a></p>
      </form>
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
