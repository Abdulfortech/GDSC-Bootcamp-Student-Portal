<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Mobilizing App - Admin Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="../css/signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    
  </head>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="process.php">
    <img class="mb-4 rounded-circle" src="../img/photo4.jpg" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-bold text-success">Admin Dashboard</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-5">
      <input type="password" class="form-control" id="floatingInput" name="password">
      <label for="floatingInput">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-success" type="submit" name="signin">Sign In</button>
    <p class="mt-3"> <a href="../index">Back to Home</a></p>
  </form>
</main>

  <!-- scripts -->
  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendor/js/bootstrap.bundle.min.js"></script> 
  <script src="../vendor/js/bootstrap.min.js"></script>  
  <!-- overlayScrollbars -->
  <script src="../vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
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
